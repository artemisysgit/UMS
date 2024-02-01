<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Cms extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList()
    {
        $res = DB::table('cms')
            ->select('admins.name','cms.*')
            ->join('admins','cms.createdBy','=','admins.id')
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('cms')->where('id', $id)->first();
        return $res;
    }
}
