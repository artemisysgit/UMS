<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Role extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList($collegeID=0)
    {
        $res = DB::table('roles')
            ->select('admins.name','roles.*')
            ->join('admins','roles.createdBy','=','admins.id')
            ->where('roles.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getDataByID($id,$collegeID=0)
    {
        $res = DB::table('roles')
        ->where('id', $id)
        ->where('roles.collegeID', $collegeID)
        ->first();
        return $res;
    }

    public function chk_availability($title,$collegeID=0)
    {
        $res = DB::table('roles')
        ->select(DB::raw('count(*) as cnt'))
        ->where('roles.title', $title)
        ->where('roles.collegeID', $collegeID)
        ->pluck('cnt');

        return $res;
    }

    public function chkID($title,$collegeID=0,$id)
    {
        $arr = [];
        $res = DB::table('roles')
        ->where('title', $title)
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
