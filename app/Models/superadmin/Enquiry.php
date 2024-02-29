<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Enquiry extends Model
{
    use HasFactory;

    public function getList($collegeID=0)
    {
        $res = DB::table('enquiries')
        ->select('courses.title as course','enquiries.*')
        ->join('courses','courses.id','=','enquiries.courseID')
        ->where('enquiries.collegeID', $collegeID)
        ->get();
        return $res;
    }
}
