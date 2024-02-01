<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\superadmin\Course;
//use App\Helpers\OrderHelper;

class CourseController extends Controller
{
    public $course;

    public function __construct()
    {
        $this->course = new Course();
        $this->middleware('admin');
        $this->middleware(function ($request, $next) {
            $this->collegeID = Auth::guard('admin')->user()->collegeID;
            return $next($request);
        });
    }

    public function index()
    {
        $model = new Course();

        $title = "Courses";
        $grid_title = "Course List";
        $data = $model->getList($this->collegeID);
        $course_type = Course::COURSE_TYPE;
        return view('admin.course.courseList',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data,'course_type'=>$course_type));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Course";
        $course_type = Course::COURSE_TYPE;
        return view('admin.course.addCourse',array('title'=>$title,'course_type'=>$course_type));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());die;

        $request->validate([
            'title' => 'required|unique:courses,title',
            'descr' => 'required',
            'startDate' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $model = new Course();

        $upload_path = public_path().'/images/admin/course/';
        $imageName = '';

        if($request->hasFile('file'))
        {
            $imageName = time().'.'.$request->file->extension();
            $request->file->move($upload_path, $imageName);
        }

        $model->title = $request->input('title');
        $model->descr = $request->input('descr');
        $model->startDate = date('Y-m-d',strtotime($request->input('startDate')));
        $model->image = $imageName;
        $model->course_type = $request->input('course_type');
        $model->status = $request->input('status');
        $model->collegeID = (int)$this->collegeID;
        $model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);
        //$res = $model->saveData($data);
        return redirect()->route('courses')->with('message',"Course has been saved...!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Course();

        $title = "Edit Course";
        //$data = Course::find($id);
        $data = $model->getCourseByID($id,$this->collegeID);
        $course_type = Course::COURSE_TYPE;
        if(!empty($data))
        {
            return view('admin.course.editCourse',array('title'=>$title,'data'=>$data,'course_type'=>$course_type));
        }
        else
        {
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            //'title' => 'required|unique:courses,title,{$id}',
            'title' => 'required|unique:courses,title,' . $id,
            'descr' => 'required',
            'startDate' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imageName = '';

        $model = Course::find($id);

        $old_img = $model->image;
        $upload_path = public_path().'/images/admin/course/';

        if($request->hasFile('file'))
        {
            if(!empty($old_img))
            {
                $file_path = $upload_path.$old_img;
                unlink($file_path);
            }

            $imageName = time().'.'.$request->file->extension();
            $request->file->move($upload_path, $imageName);
        }
        else
        {
            $imageName = $request->txt_file;
        }

        $model->title = $request->input('title');
        $model->descr = $request->input('descr');
        $model->image = $imageName;
        $model->startDate = date('Y-m-d',strtotime($request->input('startDate')));
        $model->course_type = $request->input('course_type');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('courses')->with('message',"Course has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
