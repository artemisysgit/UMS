<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Cms extends Model
{
    use HasFactory;

    public function getDataBypageName($pageName,$collegeID=0)
    {
        $res = DB::table('cms')
        ->where('pageName', $pageName)
        ->where('status', 1)
        ->where('collegeID', $collegeID)
        ->first();
        return $res;
    }
}
