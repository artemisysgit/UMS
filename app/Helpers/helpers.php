<?php
use App\Models\frontend\College;

if (! function_exists('activeMenu')) {

    function activeMenu($uri = '')
    {
        $active = '';

        if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri.'*')) {
            $active = 'active';
        }
        return $active;
    }
}

if (! function_exists('test')) {
    function test()
    {
        //return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
        return "OK";
    }
}

if (! function_exists('getActiveColleges')) {
    function getActiveColleges()
    {
        $model = new College();
        $data = $model->getList();
        return $data;
    }
}
