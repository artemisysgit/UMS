<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\superadmin\Semester;
//use App\Helpers\helpers;

class SemesterController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware(function ($request, $next) {
            $this->collegeID = Auth::guard('admin')->user()->collegeID;
            return $next($request);
        });

    }

    public function index()
    {
        $model = new Semester();

        // $helper = new MenuHelper();
        // $helper->test();
       //echo helpers::test();die;

        $title = "Semester";
        $grid_title = "Semester List";
        $data = $model->getList($this->collegeID);
        return view('admin.semester.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Semester";
        return view('admin.semester.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $model = new Semester();

        $model->title = $request->input('title');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

        $validate = $model->chk_availability($request->input('title'),$this->collegeID);
        //echo $validate_schedule;die;
        if($validate[0] == 1)
        {
            return redirect()->route('addSemester')->with("error_message","Already exists !!");
        }

        $res = $model->saveData($model);
        return redirect()->route('semesters')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Semester();

        $title = "Edit Semester";
        //$data = Course::find($id);
        $data = $model->getDataByID($id,$this->collegeID);
        if(!empty($data))
        {
            return view('admin.semester.edit',array('title'=>$title,'data'=>$data));
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
            //'title' => 'required|unique:semesters,title,' . $id,
            'title' => 'required'
        ]);

        $imageName = '';

        $model = Semester::find($id);
        $model->title = $request->input('title');
        $model->status = $request->input('status');
        $validate = $model->chk_availability($request->input('title'),$this->collegeID);
        $chkID = $model->chkID($request->input('title'),$this->collegeID,$id);
        //echo "<pre>";print_r($chkID);die;
        if($validate[0] == 1 && !empty($chkID))
        {
            return redirect()->route('editSemester',$id)->with("error_message","Already exists !!");
        }

        $model->save();
        return redirect()->route('semesters')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

}
