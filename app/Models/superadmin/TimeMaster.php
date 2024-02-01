<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class TimeMaster extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList($collegeID=0)
    {
        $res = DB::table('time_masters')
        ->where('time_masters.collegeID', $collegeID)
        ->get();
        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('time_masters')
        ->where('id', $id)
        ->where('time_masters.collegeID', $collegeID)
        ->first();
        return $res;
    }
}
