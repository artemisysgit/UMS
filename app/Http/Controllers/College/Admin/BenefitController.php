<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\College\Benefit;

class BenefitController extends Controller
{
    public function __construct()
    {
        $this->middleware('collegeadmin');
        $this->middleware(function ($request, $next) {
            $this->collegeID = Auth::guard('collegeadmin')->user()->collegeID;
            return $next($request);
        });

    }

    public function index()
    {
        $model = new Benefit();

        $title = "Benefits";
        $grid_title = "Benefits List";
        $data = $model->getList($this->collegeID);
        return view('college.admin.benefit.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Benefit";
        return view('college.admin.benefit.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'descr' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $model = new Benefit();

        $validate = $model->chk_availability($request->input('title'),$this->collegeID);
        if($validate[0] == 1)
        {
            return redirect()->route('college.admin.addBenefit')->with("error_message","Already exists !!");
        }

        $upload_path = public_path().'/images/college/benefit/';
        $imageName = '';

        if($request->hasFile('file'))
        {
            $imageName = time().'.'.$request->file->extension();
            $request->file->move($upload_path, $imageName);
        }

        $model->title = $request->input('title');
        //$model->pageName = Str::slug($request->input('title'));
        $model->title = $request->input('title');
        $model->short_descr = $request->input('short_descr');
        $model->descr = htmlentities($request->input('descr'));
        $model->image = $imageName;
        $model->status = $request->input('status');
        $model->collegeID = (int)$this->collegeID;
        $model->createdBy = Auth::guard('collegeadmin')->user()->id;

        $res = $model->saveData($model);
        return redirect()->route('college.admin.benefits')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Benefit();

        $title = "Edit Subject";
        //$data = Course::find($id);
        $data = $model->getDataByID($id,$this->collegeID);
        if(!empty($data))
        {
            return view('college.admin.benefit.edit',array('title'=>$title,'data'=>$data));
        }
        else
        {
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'descr' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $model = Benefit::find($id);
        $old_img = $model->image;
        $upload_path = public_path().'/images/college/benefit/';

        if($request->hasFile('file'))
        {
            if(!empty($old_img))
            {
                $file_path = $upload_path.$old_img;
                unlink($file_path);
            }

            $imageName = time().'.'.$request->file->extension();
            $request->file->move($upload_path, $imageName);
        }
        else
        {
            $imageName = $request->txt_file;
        }

        $model->title = $request->input('title');
        $model->short_descr = $request->input('short_descr');
        $model->descr = htmlentities($request->input('descr'));
        $model->image = $imageName;
        $model->status = $request->input('status');

        $validate = $model->chk_availability($request->input('title'),$this->collegeID);
        $chkID = $model->chkID($request->input('title'),$this->collegeID,$id);
        if($validate[0] == 1 && !empty($chkID))
        {
            return redirect()->route('editBenefit',$id)->with("error_message","Already exists !!");
        }
        $model->save();

        return redirect()->route('college.admin.benefits')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
