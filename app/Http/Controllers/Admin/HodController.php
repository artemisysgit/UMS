<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Hod;
use App\Models\Teacher;
use App\Models\Department;

class HodController extends Controller
{
    public function index()
    {
        $model = new Hod();

        $title = "HOD";
        $grid_title = "HOD List";
        $data = $model->getList();

        //echo "<pre>";print_r($data);die;

        $data = array(
            'title' =>$title,
            'grid_title'=>$grid_title,
            'data'=>$data
        );

        return view('admin.hod.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create HOD";
        $teacher_model = new Teacher();
        $teacherData = $teacher_model->getList();

        $dept_model = new Department();
        $deptData = $dept_model->getList();

        $data = array(
            'title' =>$title,
            'teacherData' =>$teacherData,
            'deptData' =>$deptData
        );

        return view('admin.hod.create',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher' => 'required',
            'dept' => 'required',
        ]);

        $model = new Hod();

        $model->teacherID = $request->input('teacher');
        $model->deptID = $request->input('dept');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);
        return redirect()->route('hodList')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Hod();

        $title = "Edit Hod";
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            $teacher_model = new Teacher();
            $teacherData = $teacher_model->getList();

            $dept_model = new Department();
            $deptData = $dept_model->getList();

            $data = array(
                'title' =>$title,
                'teacherData' =>$teacherData,
                'deptData' =>$deptData,
                'data' =>$data
            );


            return view('admin.hod.edit',$data);
        }
        else
        {
            abort('404');
        }

        //echo "<pre>";print_r($data);die;


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher' => 'required',
            'dept' => 'required',
        ]);


        $imageName = '';

        $model = Hod::find($id);
        $model->teacherID = $request->input('teacher');
        $model->deptID = $request->input('dept');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('hodList')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
