<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Subject extends Model
{
    use HasFactory;

    public function getList($collegeID=0)
    {
        $res = DB::table('subjects')
            ->select('admins.name','subjects.*')
            ->join('admins','subjects.createdBy','=','admins.id')
            ->where('subjects.collegeID', $collegeID)
            ->where('subjects.status', 1)
            ->get();

        return $res;
    }

    public function getListCourseWise($courseID,$collegeID=0)
    {
        $res = DB::table('subjects')
            ->select('subjects.*')
            //->join('subject_combinations as b','subjects.id','=','b.subID')
            ->where('subjects.courseID', $courseID)
            ->where('subjects.collegeID', $collegeID)
            ->where('subjects.status', 1)
            ->get();

        return $res;
    }

    public function getSubjectCombination($subID,$courseID,$collegeID)
    {
        $res = DB::table('subject_combinations as a')
            ->select('b.title','c.title as sub1','d.title as sub2')
            ->join('subjects as b','b.id','=','a.subID')
            ->join('subjects as c','c.id','=','a.sub1')
            ->join('subjects as d','d.id','=','a.sub2')
            ->where('b.id', $subID)
            ->where('b.courseID', $courseID)
            ->where('b.collegeID', $collegeID)
            ->where('b.status', 1)
            ->get();

        return $res;
    }


    public function getDataByID($id,$collegeID=0)
    {
        $res = DB::table('subjects')
        ->where('id', $id)
        ->where('subjects.collegeID', $collegeID)
        ->where('subjects.status', 1)
        ->first();
        return $res;
    }

}
