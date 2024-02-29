<?php

namespace App\Models\College;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Benefit extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList($collegeID=0)
    {
        $res = DB::table('benefits')
            ->select('admins.name','benefits.*')
            ->join('admins','benefits.createdBy','=','admins.id')
            ->where('benefits.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getDataByID($id,$collegeID=0)
    {
        $res = DB::table('benefits')
        ->where('id', $id)
        ->where('collegeID', $collegeID)
        ->first();
        return $res;
    }

    public function chk_availability($title,$collegeID=0)
    {
        $res = DB::table('benefits')
        ->select(DB::raw('count(*) as cnt'))
        ->where('benefits.title', $title)
        ->where('benefits.collegeID', $collegeID)
        ->pluck('cnt');

        return $res;
    }

    public function chkID($title,$collegeID=0,$id)
    {
        $arr = [];
        $res = DB::table('benefits')
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
