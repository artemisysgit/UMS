<?php

namespace App\Models\superadmin;

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

    public function getList($collegeID=0)
    {
        $res = DB::table('colleges')
            ->select('admins.name','colleges.*')
            ->join('admins','colleges.createdBy','=','admins.id')
            //->where('colleges.collegeID', $collegeID)
            ->get();

        return $res;
    }

    public function getDataByID($id)
    {
        $res = DB::table('colleges')
        ->where('id', $id)
        //->where('collegeID', $collegeID)
        ->first();
        return $res;
    }
}
