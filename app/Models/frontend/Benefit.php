<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Benefit extends Model
{
    use HasFactory;


    public function getList($collegeID=0)
    {
        $res = DB::table('benefits')
            ->select('admins.name','benefits.*')
            ->join('admins','benefits.createdBy','=','admins.id')
            ->where('benefits.status',1)
            ->where('benefits.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('benefits')
        ->where('id', $id)
        ->where('collegeID', $collegeID)
        ->where('status', 1)
        ->first();
        return $res;
    }
}
