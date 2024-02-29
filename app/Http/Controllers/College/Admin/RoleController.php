<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\College\Role;

class RoleController extends Controller
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
        $model = new Role();

        $title = "Role";
        $grid_title = "Role List";
        $data = $model->getList($this->collegeID);
        return view('college.admin.role.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Role";
        return view('college.admin.role.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            //'title' => 'required|unique:roles,title',
            'title' => 'required',
            'descr' => 'required'
        ]);

        $model = new Role();

        $model->title = $request->input('title');
        $model->roleCode = Str::slug($request->input('title'));
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->collegeID = (int)$this->collegeID;
        $model->createdBy = Auth::guard('collegeadmin')->user()->id;

        $validate_title = $model->chk_availability($request->input('title'),$this->collegeID);

        //echo $validate_title[0];die;

        if($validate_title[0] == 1)
        {
            return redirect()->route('college.admin.addRole')->with("error_message","That Role already exists !!");
        }

        $res = $model->saveData($model);
        return redirect()->route('college.admin.roles')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Role();

        $title = "Edit Role";
        //$data = Course::find($id);
        $data = $model->getDataByID($id,$this->collegeID);
        if(!empty($data))
        {
            return view('college.admin.role.edit',array('title'=>$title,'data'=>$data));
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
            'descr' => 'required'
        ]);

        $imageName = '';

        $model = Role::find($id);
        $model->title = $request->input('title');
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $validate = $model->chk_availability($request->input('title'),$this->collegeID);
        $chkID = $model->chkID($request->input('title'),$this->collegeID,$id);
        //echo "<pre>";print_r($chkID);die;
        if($validate[0] == 1 && !empty($chkID))
        {
            return redirect()->route('editRole',$id)->with("error_message","Already exists !!");
        }
        $model->save();

        return redirect()->route('college.admin.roles')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
