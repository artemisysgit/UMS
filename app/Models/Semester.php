<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Semester extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList()
    {
        $res = DB::table('semesters')
            ->select('admins.name','semesters.*')
            ->join('admins','semesters.createdBy','=','admins.id')
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('semesters')->where('id', $id)->first();
        return $res;
    }
}
