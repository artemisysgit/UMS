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

    public function getList($collegeID=0)
    {
        $res = DB::table('hods')
            ->select('admins.name','hods.*','teachers.name as hodName','departments.title as deptName')
            ->join('teachers','teachers.id','=','hods.teacherID')
            ->join('departments','departments.id','=','hods.deptID')
            ->join('admins','hods.createdBy','=','admins.id')
            ->where('hods.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getDataByID($id,$collegeID=0)
    {
        $res = DB::table('hods')
        ->where('id', $id)
        ->where('collegeID', $collegeID)
        ->first();
        return $res;
    }

    public function chk_availability($dept,$collegeID=0)
    {
        $res = DB::table('hods')
        ->select(DB::raw('count(*) as cnt'))
        ->where('hods.deptID', $dept)
        ->where('hods.collegeID', $collegeID)
        ->pluck('cnt');

        return $res;
    }

    public function chkID($dept,$collegeID=0,$id)
    {
        $arr = [];
        $res = DB::table('hods')
        ->where('deptID', $dept)
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
