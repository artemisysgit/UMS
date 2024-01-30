<?php

namespace App\Models\College;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','file','startdate','status'];

    const COURSE_TYPE = [
        '1' => 'All',
        '2' => 'Trending',
        '3' => 'Featured',
        '4' => 'Popular',
    ];

    public function saveData($data)
    {
        $data->save();
        //$res = DB::table('courses')->insertGetId($data);
        return true;
    }

    public function getList($collegeID=0)
    {
        // $res = DB::table('courses')->get();
        // return $res;

        $res = DB::table('courses')
            ->select('college_admins.name','courses.*')
            ->join('college_admins','courses.createdBy','=','college_admins.id')
            ->where('courses.collegeID',$collegeID)
            ->get();

        return $res;
    }

    public function getCourseByID($id,$collegeID)
    {
        $res = DB::table('courses')
        ->where('id', $id)
        ->where('collegeID', $collegeID)
        ->first();
        return $res;
    }
}
