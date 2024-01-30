<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $model = new Department();

        $title = "Department";
        $grid_title = "Department List";
        $data = $model->getList();
        return view('admin.department.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Department";
        return view('admin.department.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:departments,title',
            'descr' => 'required'
        ]);

        $model = new Department();

        $model->title = $request->input('title');
        $model->deptCode = Str::slug($request->input('title')).time();
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);
        return redirect()->route('departments')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Department();

        $title = "Edit Department";
        //$data = Course::find($id);
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            return view('admin.department.edit',array('title'=>$title,'data'=>$data));
        }
        else
        {
            abort('404');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            //'title' => 'required|unique:departments,title,{$id}',
            'title' => 'required|unique:departments,title,' . $id,
            'descr' => 'required'
        ]);


        $imageName = '';

        $model = Department::find($id);
        $model->title = $request->input('title');
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('departments')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
