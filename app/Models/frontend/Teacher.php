<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Teacher extends Model
{
    use HasFactory;

    public function getList($collegeID=0,$limit)
    {
        $res = DB::table('teachers as a')
            ->select('a.*','c.title as dept','d.title as subject')
            ->leftJoin('assign_teacher_subject_wises as b','a.id','=','b.teacherID')
            ->leftJoin('departments as c','c.id','=','a.deptID')
            ->leftJoin('subjects as d','d.id','=','b.subjectID')
            ->where('a.status',1)
            ->where('a.collegeID',$collegeID)
            ->limit($limit)
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('teachers as a')
            ->select('a.*','c.title as dept','d.title as subject','f.title as role')
            ->leftJoin('assign_teacher_subject_wises as b','a.id','=','b.teacherID')
            ->leftJoin('departments as c','c.id','=','a.deptID')
            ->leftJoin('subjects as d','d.id','=','b.subjectID')
            ->leftJoin('user_roles as e','e.userID','=','a.id')
            ->leftJoin('roles as f','f.id','=','e.roleID')
            ->where('a.status',1)
            //->where('a.collegeID',$collegeID)
            ->where('a.id', $id)->first();

        return $res;
    }
}
