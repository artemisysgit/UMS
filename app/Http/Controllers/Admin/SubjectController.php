<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $model = new Subject();

        $title = "Subject";
        $grid_title = "Subject List";
        $data = $model->getList();
        return view('admin.subject.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Subject";
        return view('admin.subject.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:subjects,title',
            'descr' => 'required'
        ]);

        $model = new Subject();

        $model->title = $request->input('title');
        $model->subCode = Str::slug($request->input('title'));
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);
        return redirect()->route('subjects')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Subject();

        $title = "Edit Subject";
        //$data = Course::find($id);
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            return view('admin.subject.edit',array('title'=>$title,'data'=>$data));
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
            'title' => 'required|unique:subjects,title,' . $id,
            'descr' => 'required'
        ]);

        $model = Subject::find($id);
        $model->title = $request->input('title');
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('subjects')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
