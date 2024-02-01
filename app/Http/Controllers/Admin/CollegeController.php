<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\superadmin\College;

class CollegeController extends Controller
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
        $model = new College();

        $title = "College";
        $grid_title = "College List";
        $data = $model->getList();
        return view('admin.college.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create College";
        return view('admin.college.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:colleges,title',
            'descr' => 'required'
        ]);

        $model = new College();

        $model->title = $request->input('title');
        $model->collegeCode = Str::slug($request->input('title')).time();
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);
        return redirect()->route('colleges')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new College();

        $title = "Edit College";
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            return view('admin.college.edit',array('title'=>$title,'data'=>$data));
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
            'title' => 'required|unique:colleges,title,' . $id,
            'descr' => 'required'
        ]);


        $imageName = '';

        $model = College::find($id);
        $model->title = $request->input('title');
        $model->collegeCode = Str::slug($request->input('title')).time();
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('colleges')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}