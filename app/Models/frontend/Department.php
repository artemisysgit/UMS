<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Department extends Model
{
    use HasFactory;

    public function getList()
    {
        $res = DB::table('departments')
            ->select('admins.name','departments.*')
            ->join('admins','departments.createdBy','=','admins.id')
            ->where('departments.status',1)
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('departments')->where('id', $id)->first();
        return $res;
    }
}
