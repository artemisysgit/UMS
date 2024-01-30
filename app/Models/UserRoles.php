<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class UserRoles extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        $lastID = $data->id;
        //$res = DB::table('courses')->insertGetId($data);
        return true;
    }

    public function getDataByID($id,$type)
    {
        $res = DB::table('user_roles')
        ->where('userID', $id)
        ->where('type', $type)
        ->get();
        return $res;
    }
}
