<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\College\Semester;
//use App\Helpers\helpers;

class SemesterController extends Controller
{
    public function index()
    {
        $model = new Semester();

        // $helper = new MenuHelper();
        // $helper->test();
       //echo helpers::test();die;

        $title = "Semester";
        $grid_title = "Semester List";
        $data = $model->getList();
        return view('college.admin.semester.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Semester";
        return view('college.admin.semester.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:semesters,title',
        ]);

        $model = new Semester();

        $model->title = $request->input('title');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

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
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            return view('college.admin.semester.edit',array('title'=>$title,'data'=>$data));
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
            //'title' => 'required|unique:semesters,title,{$id}',
            'title' => 'required|unique:semesters,title,' . $id,
        ]);


        $imageName = '';

        $model = Semester::find($id);
        $model->title = $request->input('title');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('college.admin.semesters')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

}
