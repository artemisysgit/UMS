<?php

namespace App\Models;

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

    public function getList()
    {
        $res = DB::table('session_models')
            ->select('admins.name','session_models.*')
            ->join('admins','session_models.createdBy','=','admins.id')
            ->get();

        return $res;
    }

    public function getSessionByID($id)
    {
        $res = DB::table('session_models')->where('id', $id)->first();
        return $res;
    }
}
