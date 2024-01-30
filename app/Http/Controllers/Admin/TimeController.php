<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\TimeMaster;

class TimeController extends Controller
{
    public function index()
    {
        $model = new TimeMaster();

        $title = "Time";
        $grid_title = "Lession List";
        $data = $model->getList();

        //echo "<pre>";print_r($data);die;

        $data = array(
            'title' =>$title,
            'grid_title'=>$grid_title,
            'data'=>$data
        );

        return view('admin.time.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Time";
        $data = array(
            'title' =>$title,
        );

        return view('admin.time.create',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $model = new TimeMaster();

        $model->start_time = $request->input('start_time');
        $model->end_time = $request->input('end_time');
        $model->status = $request->input('status');

        $res = $model->saveData($model);
        return redirect()->route('timeList')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new TimeMaster();

        $title = "Edit Time";
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            $data = array(
                'title' =>$title,
                'data' =>$data
            );

            return view('admin.time.edit',$data);
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
            'start_time' => 'required',
            'end_time' => 'required',
        ]);


        $imageName = '';

        $model = TimeMaster::find($id);
        $model->start_time = $request->input('start_time');
        $model->end_time = $request->input('end_time');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('timeList')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
