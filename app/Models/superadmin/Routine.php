<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Routine extends Model
{
    use HasFactory;

    const WEEK_DAYS = [
        '1' => 'Monday',
        '2' => 'Tuesday',
        '3' => 'Wednesday',
        '4' => 'Thursday',
        '5' => 'Friday',
        '6' => 'Saturday',
        '7' => 'Sunday',
    ];

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList()
    {
        $res = DB::table('routines')
               ->select('routines.*','teachers.name','departments.title as dept','semesters.title as sem',DB::raw("CONCAT(time_masters.start_time,'-',time_masters.end_time) as time"))
               ->join('teachers','teachers.id','=','routines.teacherID')
               ->join('departments','departments.id','=','routines.deptID')
               ->join('semesters','semesters.id','=','routines.semID')
               ->join('time_masters','time_masters.id','=','routines.timeID')
               ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('routines')->where('id', $id)->first();
        return $res;
    }

    public function get_routine_by_teacher_dept($teacherID,$deptID)
    {
        $res = DB::table('routines')
               ->select('routines.id','routines.status','routines.weekID','teachers.name','departments.title as dept','semesters.title as sem',DB::raw("CONCAT(time_masters.start_time,'-',time_masters.end_time) as time"))
               ->join('teachers','teachers.id','=','routines.teacherID')
               ->join('departments','departments.id','=','routines.deptID')
               ->join('semesters','semesters.id','=','routines.semID')
               ->join('time_masters','time_masters.id','=','routines.timeID')
               ->where('routines.teacherID','=',$teacherID)
               ->where('routines.deptID','=',$deptID)
               //->toSql();
               ->get()->toArray();

        return $res;

    }

    public function chk_teacher_availability($time,$week,$teacher)
    {
        $res = DB::table('routines')
        ->select(DB::raw('count(*) as cnt'))
        ->where('routines.timeID','=',$time)
        ->where('routines.weekID','=',$week)
        ->where('routines.teacherID','=',$teacher)
        ->pluck('cnt');

        return $res;
    }
}
