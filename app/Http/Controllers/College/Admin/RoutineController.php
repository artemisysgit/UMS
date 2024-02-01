<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Validator;

use App\Models\College\Routine;
use App\Models\College\Teacher;
use App\Models\College\Department;
use App\Models\College\Semester;
use App\Models\College\TimeMaster;

class RoutineController extends Controller
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
        $model = new Routine();

        $title = "Lession";
        $grid_title = "Lession List";
        $data = $model->getList($this->collegeID);

        $teacher_model = new Teacher();
        $teacherData = $teacher_model->getList($this->collegeID);

        $dept_model = new Department();
        $deptData = $dept_model->getList($this->collegeID);

        $data = array(
            'title' =>$title,
            'grid_title'=>$grid_title,
            'data'=>$data,
            'teacherData' =>$teacherData,
            'deptData' =>$deptData,
        );

        return view('college.admin.routine.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Routine";
        $teacher_model = new Teacher();
        $teacherData = $teacher_model->getList($this->collegeID);

        $dept_model = new Department();
        $deptData = $dept_model->getList($this->collegeID);

        $sem_model = new Semester();
        $semData = $sem_model->getList($this->collegeID);

        $time_model = new TimeMaster();
        $timeData = $time_model->getList($this->collegeID);

        $weekdays = Routine::WEEK_DAYS;

        $data = array(
            'title' =>$title,
            'teacherData' =>$teacherData,
            'deptData' =>$deptData,
            'weekdays' =>$weekdays,
            'semData' =>$semData,
            'timeData' =>$timeData
        );

        return view('college.admin.routine.create',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher' => 'required',
            'dept' => 'required',
            'sem' => 'required',
            'times' => 'required',
            'weekdays' => 'required'
        ]);

        $model = new Routine();

        $teacherID = (int)$request->input('teacher');
        $timeID = (int)$request->input('times');
        $weekID = (int)$request->input('weekdays');

        $model->teacherID = $request->input('teacher');
        $model->deptID = $request->input('dept');
        $model->semID = $request->input('sem');
        $model->timeID = $request->input('times');
        $model->weekID = $request->input('weekdays');
        $model->startTime = $request->input('start_time');
        $model->collegeID = (int)$this->collegeID;
        $model->createdBy = Auth::guard('collegeadmin')->user()->id;

        $validate_schedule = $model->chk_teacher_availability($timeID,$weekID,$teacherID,$this->collegeID);

        //echo $validate_schedule;die;

        if($validate_schedule[0] == 1)
        {
            return redirect()->route('college.admin.addRoutine')->with("error_message","That Teacher already assigned in that time !!");
        }

        $res = $model->saveData($model);
        return redirect()->route('college.admin.routineList')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Routine();

        $title = "Edit Routine";
        $data = $model->getDataByID($id,$this->collegeID);

        if(!empty($data))
        {
            $teacher_model = new Teacher();
            $teacherData = $teacher_model->getList($this->collegeID);

            $dept_model = new Department();
            $deptData = $dept_model->getList($this->collegeID);

            $sem_model = new Semester();
            $semData = $sem_model->getList($this->collegeID);

            $time_model = new TimeMaster();
            $timeData = $time_model->getList($this->collegeID);

            $weekdays = Routine::WEEK_DAYS;

            $data = array(
                'title' =>$title,
                'teacherData' =>$teacherData,
                'deptData' =>$deptData,
                'semData' =>$semData,
                'timeData' =>$timeData,
                'weekdays' =>$weekdays,
                'data' =>$data
            );

            return view('college.admin.routine.edit',$data);
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
            'teacher' => 'required',
            'dept' => 'required',
            'sem' => 'required',
            'times' => 'required',
            'weekdays' => 'required'
        ]);

        $model = Routine::find($id);
        $model->teacherID = $request->input('teacher');
        $model->deptID = $request->input('dept');
        $model->semID = $request->input('sem');
        $model->timeID = $request->input('times');
        $model->weekID = $request->input('weekdays');
        $model->status = $request->input('status');

        $teacherID = (int)$request->input('teacher');
        $timeID = (int)$request->input('times');
        $weekID = (int)$request->input('weekdays');

        $res = $model->getDataByID($id,$this->collegeID);
        $current_weekID = (int)$res->weekID;

        $validate_schedule = $model->chk_teacher_availability($timeID,$weekID,$teacherID);
        if(($validate_schedule[0] == 1) && ($weekID != $current_weekID))
        {
            return redirect()->route('college.admin.editRoutine',$id)->with("error_message","That Teacher already assigned in that time !!");
        }

        $model->save();

        return redirect()->route('college.admin.routineList')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

    public function search_routine(Request $request)
    {
        $model = new Routine();
        $teacherID = (int)$request->post('teacher');
        $deptID = (int)$request->post('dept');
        $res = $model->get_routine_by_teacher_dept($teacherID,$deptID,$this->collegeID);

        //echo "<pre>";print_r($res);die;

        $weekdays = Routine::WEEK_DAYS;

        $model2 = new TimeMaster();
        $time_slot = $model2->getList($this->collegeID);

        $arr = [];

        foreach($res as $r)
        {
            $sem = $r->sem;
            $teacher = $r->name;
            $dept = $r->dept;
            $week = $r->weekID;
            $time = $r->time;

            $arr[$week][$time] = "Sem:- ".$sem .',</br> Teacher:- '.$teacher.',</br> Dept:- '.$dept;
        }
        //echo "<pre>";print_r($arr);
        if(!empty($time_slot))
        {

            echo "<table class='table table-bordered table-responsive'>";
                echo "<tr>";
                echo "<th></th>";

                foreach($time_slot as $t)
                {
                    $schedule_time = $t->start_time.' - '.$t->end_time;

                    echo "<th>".$schedule_time."</th>";
                }

                echo "</tr>";

                foreach($weekdays as $k=>$v)
                {
                    echo "<tr>";
                    echo "<th>".$v."</th>";

                    foreach($time_slot as $time)
                    {
                        $schedule_time = $time->start_time.'-'.$time->end_time;

                        if(!empty($arr[$k][$schedule_time]))
                        {
                            echo "<td>".$arr[$k][$schedule_time]."</td>";
                        }
                        else
                        {
                            echo "<td></td>";
                        }
                    }

                    echo "</tr>";
                }

            echo "</table>";
        }

    }
}
