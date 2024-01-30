<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Teacher extends Model
{
    use HasFactory;

    public function getList()
    {
        $res = DB::table('assign_teacher_subject_wises as a')
            ->select('a.*','b.name as teacher','b.image','c.title as deptName','d.title as subject')
            ->join('teachers as b','b.id','=','a.teacherID')
            ->join('departments as c','c.id','=','a.deptID')
            ->join('subjects as d','d.id','=','a.subjectID')
            ->where('b.status',1)
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('assign_teacher_subject_wises as a')
            ->select('a.*','b.name as teacher','b.image','c.title as deptName','d.title as subject')
            ->join('teachers as b','b.id','=','a.teacherID')
            ->join('departments as c','c.id','=','a.deptID')
            ->join('subjects as d','d.id','=','a.subjectID')
            ->where('b.status',1)
            ->where('a.id', $id)->first();

        return $res;
    }
}
