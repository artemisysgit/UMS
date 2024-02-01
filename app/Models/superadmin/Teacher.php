<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function saveData($data)
    {
        $data->save();
        $lastID = $data->id;
        //$res = DB::table('courses')->insertGetId($data);
        return $lastID;
    }

    public function getList($collegeID=0)
    {
        $res = DB::table('teachers')
        ->where('teachers.collegeID', $collegeID)
        ->get();
        return $res;
    }

    public function getDataByID($id,$collegeID=0)
    {
        $res = DB::table('teachers')
        ->where('id', $id)
        ->where('teachers.collegeID', $collegeID)
        ->first();
        return $res;
    }
}
