<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\College\TimeMaster;

class TimeController extends Controller
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
        $model = new TimeMaster();

        $title = "Time";
        $grid_title = "Lession List";
        $data = $model->getList($this->collegeID);

        //echo "<pre>";print_r($data);die;

        $data = array(
            'title' =>$title,
            'grid_title'=>$grid_title,
            'data'=>$data
        );

        return view('college.admin.time.list',$data);
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

        return view('college.admin.time.create',$data);
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

        $model->collegeID = (int)$this->collegeID;
        $model->start_time = $request->input('start_time');
        $model->end_time = $request->input('end_time');
        $model->status = $request->input('status');

        $res = $model->saveData($model);
        return redirect()->route('college.admin.timeList')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new TimeMaster();

        $title = "Edit Time";
        $data = $model->getDataByID($id,$this->collegeID);
        if(!empty($data))
        {
            $data = array(
                'title' =>$title,
                'data' =>$data
            );

            return view('college.admin.time.edit',$data);
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

        return redirect()->route('college.admin.timeList')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
