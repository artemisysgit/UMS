<?php

namespace App\Models\College;

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
        ->where('collegeID', $collegeID)
        ->first();
        return $res;
    }
}
