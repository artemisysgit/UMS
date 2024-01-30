<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class TimeMaster extends Model
{
    use HasFactory;

    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList()
    {
        $res = DB::table('time_masters')->get();
        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('time_masters')->where('id', $id)->first();
        return $res;
    }
}
