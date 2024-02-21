<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class College extends Model
{
    use HasFactory;
    protected $fillable = ['title','descr','status'];


    public function saveData($data)
    {
        $data->save();
        return true;
    }

    public function getList()
    {
        $res = DB::table('colleges')
            ->where('status', 1)
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('colleges')
        ->where('id', $id)
        ->first();
        return $res;
    }

    public function getDataByCode($code)
    {
        $res = DB::table('colleges')
        ->where('collegeCode', $code)
        ->where('status', 1)
        ->first();
        return $res;
    }
}
