<?php
use App\Models\frontend\College;
use App\Models\frontend\Course;
use App\Models\frontend\Subject;

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

if (! function_exists('getSubjectCombination')) {
    function getSubjectCombination($subID,$courseID,$collegeID)
    {
        $model = new Subject();
        $data = $model->getSubjectCombination($subID,$courseID,$collegeID);
        if(!empty($data))
        {
            return $data;
        }

    }
}
