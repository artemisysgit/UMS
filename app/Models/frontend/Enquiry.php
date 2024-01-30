<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Enquiry extends Model
{
    use HasFactory;

    public function getList()
    {
        $res = DB::table('enquiries')>get();
        return $res;
    }

    public function saveData($data)
    {
        $data->save();
        return true;
    }
}
