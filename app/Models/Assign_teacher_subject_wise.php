<?php

namespace App\Models;

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

    public function getList()
    {
        // $res = DB::table('courses')->get();
        // return $res;

        $res = DB::table('assign_teacher_subject_wises')
            ->select('teachers.name','assign_teacher_subject_wises.*')
            ->join('teachers','assign_teacher_subject_wises.createdBy','=','teachers.id')
            ->get();

        return $res;
    }

    public function getDataID($id)
    {
        $res = DB::table('assign_teacher_subject_wises')->where('id', $id)->first();
        return $res;
    }

    public function getDataByTeacherID($id)
    {
        $res = DB::table('assign_teacher_subject_wises')->where('teacherID', $id)->get();
        return $res;
    }

    public function updateData($data,$id)
    {
        if($id == 0)
        {
            $res =  DB::table('assign_teacher_subject_wises')->insert($data);
            return true;
        }
        else
        {
            $res = DB::table('assign_teacher_subject_wises')->where('id',$id)->update($data);
            return true;
        }
    }
}
