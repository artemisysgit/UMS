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

    public function getList($type=null)
    {
        if(!empty($type) && ($type != 1))
        {
            $res = DB::table('courses')
            ->select('admins.name','courses.*')
            ->join('admins','courses.createdBy','=','admins.id')
            ->where('courses.status',1)
            ->where('courses.course_type',$type)
            ->get();
        }
        else
        {
            $res = DB::table('courses')
            ->select('admins.name','courses.*')
            ->join('admins','courses.createdBy','=','admins.id')
            ->where('courses.status',1)
            ->get();
        }


        return $res;
    }

    public function getCourseByID($id)
    {
        $res = DB::table('courses')->where('id', $id)->first();
        return $res;
    }
}
