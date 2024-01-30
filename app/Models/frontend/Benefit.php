<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Benefit extends Model
{
    use HasFactory;


    public function getList()
    {
        $res = DB::table('benefits')
            ->select('admins.name','benefits.*')
            ->join('admins','benefits.createdBy','=','admins.id')
            ->where('benefits.status',1)
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('benefits')->where('id', $id)->first();
        return $res;
    }
}
