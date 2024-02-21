<?php

namespace App\Models\frontend;

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

    public function getList($type=null,$collegeID=0)
    {
        //if(!empty($type) && ($type != 1))
        if(!empty($type))
        {
            $res = DB::table('courses')
            ->select('admins.name','courses.*')
            ->join('admins','courses.createdBy','=','admins.id')
            ->where('courses.status',1)
            ->where('courses.course_type',$type)
            ->where('courses.collegeID',$collegeID)
            ->get();
        }
        else
        {
            $res = DB::table('courses')
            ->select('admins.name','courses.*')
            ->join('admins','courses.createdBy','=','admins.id')
            ->where('courses.status',1)
            ->where('courses.collegeID',$collegeID)
            ->get();
        }


        return $res;
    }

    public function getCourseByID($id)
    {
        $res = DB::table('courses')
        ->where('id', $id)
        ->where('status', 1)
        ->first();
        return $res;
    }
}
