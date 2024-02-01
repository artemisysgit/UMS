<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Assign_teacher extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        //$res = DB::table('courses')->insertGetId($data);
        return $data->id;
    }

    public function getList()
    {
        $res = DB::table('assign_teachers')
            ->select('teachers.name','assign_teachers.*','admins.name as createdBy')
            ->join('teachers','assign_teachers.teacherID','=','teachers.id')
            ->join('admins','assign_teachers.createdBy','=','admins.id')
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('assign_teachers')->where('id', $id)->first();
        return $res;
    }
}
