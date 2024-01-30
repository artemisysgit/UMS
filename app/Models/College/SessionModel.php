<?php

namespace App\Models\College;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class SessionModel extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        //$res = DB::table('courses')->insertGetId($data);
        return true;
    }

    public function getList($collegeID)
    {
        $res = DB::table('session_models')
            ->select('college_admins.name','session_models.*')
            ->join('college_admins','session_models.createdBy','=','college_admins.id')
            ->where('session_models.collegeID', $collegeID)
            ->where('session_models.status', 1)
            ->get();

        return $res;
    }

    public function getSessionByID($id,$collegeID)
    {
        $res = DB::table('session_models')
        ->where('id', $id)
        ->where('collegeID', $collegeID)
        ->first();
        return $res;
    }
}
