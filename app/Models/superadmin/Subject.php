<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Subject extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList($collegeID=0)
    {
        $res = DB::table('subjects')
            ->select('admins.name','subjects.*')
            ->join('admins','subjects.createdBy','=','admins.id')
            ->where('subjects.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getDataByID($id,$collegeID=0)
    {
        $res = DB::table('subjects')
        ->where('id', $id)
        ->where('subjects.collegeID', $collegeID)
        ->first();
        return $res;
    }

    public function chk_availability($title,$collegeID=0)
    {
        $res = DB::table('subjects')
        ->select(DB::raw('count(*) as cnt'))
        ->where('subjects.title', $title)
        ->where('subjects.collegeID', $collegeID)
        ->pluck('cnt');

        return $res;
    }

    public function chkID($title,$collegeID=0,$id)
    {
        $arr = [];
        $res = DB::table('subjects')
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
