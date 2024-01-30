<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Course;
//use App\Helpers\OrderHelper;

class CourseController extends Controller
{
    public $course;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $model = new Course();

        $title = "Courses";
        $grid_title = "Course List";
        $data = $model->getList();
        $course_type = Course::COURSE_TYPE;
        return view('student.course.courseList',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data,'course_type'=>$course_type));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = new Course();

        $title = "Edit Course";
        //$data = Course::find($id);
        $data = $model->getCourseByID($id);
        $course_type = Course::COURSE_TYPE;
        if(!empty($data))
        {
            return view('student.course.editCourse',array('title'=>$title,'data'=>$data,'course_type'=>$course_type));
        }
        else
        {
            abort(404);
        }
    }


}
