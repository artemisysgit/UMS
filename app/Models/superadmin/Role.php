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
}
