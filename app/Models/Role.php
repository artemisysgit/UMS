<?php

namespace App\Models;

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

    public function getList()
    {
        $res = DB::table('roles')
            ->select('admins.name','roles.*')
            ->join('admins','roles.createdBy','=','admins.id')
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('roles')->where('id', $id)->first();
        return $res;
    }
}
