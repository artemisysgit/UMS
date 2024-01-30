<?php

namespace App\Models\college;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Admin extends Authenticatable
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

    public function getList($collegeID)
    {
        $res = DB::table('college_admins')
        ->where('collegeID', $collegeID)
        ->where('status', 1)
        ->get();
        return $res;
    }

    public function getDataByID($id,$collegeID)
    {
        $res = DB::table('college_admins')
        ->where('id', $id)
        ->where('collegeID', $collegeID)
        ->where('status', 1)
        ->first();
        return $res;
    }
}