<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Hod extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList()
    {
        $res = DB::table('hods')
            ->select('admins.name','hods.*','teachers.name as hodName','departments.title as deptName')
            ->join('teachers','teachers.id','=','hods.teacherID')
            ->join('departments','departments.id','=','hods.deptID')
            ->join('admins','hods.createdBy','=','admins.id')
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('hods')->where('id', $id)->first();
        return $res;
    }
}
