<?php

namespace App\Models\college;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Subject_combination extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList($subID,$collegeID=0)
    {
        $res = DB::table('subject_combinations as a')
            ->select('a.*','b.title','c.title as subject1','d.title as subject2')
            ->join('subjects as b','b.id','=','a.subID')
            ->join('subjects as c','c.id','=','a.sub1')
            ->join('subjects as d','d.id','=','a.sub2')
            ->where('b.id', $subID)
            ->where('a.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getSubjectList($subID,$collegeID=0)
    {
        $res = DB::table('subjects')
        ->where('subjects.id','!=', $subID)
        ->where('subjects.collegeID', $collegeID)
        ->get();

        return $res;
    }

    public function getDataByID($subID,$id,$collegeID=0)
    {
        $res = DB::table('subject_combinations')
        ->where('subID', $subID)
        ->where('id', $id)
        ->where('subject_combinations.collegeID', $collegeID)
        ->first();
        return $res;
    }

    public function chk_availability($sub1,$sub2,$subID,$collegeID=0)
    {
        $res = DB::table('subject_combinations')
        ->select(DB::raw('count(*) as cnt'))
        ->where('subject_combinations.sub1', $sub1)
        ->where('subject_combinations.sub2', $sub2)
        ->where('subject_combinations.subID', $subID)
        ->where('subject_combinations.collegeID', $collegeID)
        ->pluck('cnt');

        return $res;
    }

    public function chkID($subID,$collegeID=0,$id)
    {
        $arr = [];
        $res = DB::table('subject_combinations')
        ->where('subject_combinations.subID', $subID)
        ->where('collegeID', $collegeID)
        ->where('id','!=', $id)
        ->get();

        if(!empty($res))
        {
            foreach($res as $r)
            {
                $arr[] = $r->id;
            }
        }
        return $arr;
    }
}
