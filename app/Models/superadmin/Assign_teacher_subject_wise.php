<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Assign_teacher_subject_wise extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        //$res = DB::table('courses')->insertGetId($data);
        return true;
    }

    public function getList($collegeID=0)
    {
        // $res = DB::table('courses')->get();
        // return $res;

        $res = DB::table('assign_teacher_subject_wises')
            ->select('teachers.name','assign_teacher_subject_wises.*')
            ->join('teachers','assign_teacher_subject_wises.createdBy','=','teachers.id')
            ->where('assign_teacher_subject_wises.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getDataID($id,$collegeID=0)
    {
        $res = DB::table('assign_teacher_subject_wises')
        ->where('id', $id)
        ->where('assign_teacher_subject_wises.collegeID', $collegeID)
        ->first();
        return $res;
    }

    public function getDataByTeacherID($id,$collegeID=0)
    {
        $res = DB::table('assign_teacher_subject_wises')
        ->where('teacherID', $id)
        ->where('assign_teacher_subject_wises.collegeID', $collegeID)
        ->get();
        return $res;
    }

    public function updateData($data,$id,$collegeID=0)
    {
        if($id == 0)
        {
            $res =  DB::table('assign_teacher_subject_wises')->insert($data);
            return true;
        }
        else
        {
            $res = DB::table('assign_teacher_subject_wises')
            ->where('id',$id)
            ->where('assign_teacher_subject_wises.collegeID', $collegeID)
            ->update($data);
            return true;
        }
    }
}
