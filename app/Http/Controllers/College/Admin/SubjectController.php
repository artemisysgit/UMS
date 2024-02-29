<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\College\Subject;
use App\Models\College\Course;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('collegeadmin');
        $this->middleware(function ($request, $next) {
            $this->collegeID = Auth::guard('collegeadmin')->user()->collegeID;
            return $next($request);
        });

    }

    public function index()
    {
        $model = new Subject();

        $title = "Subject";
        $grid_title = "Subject List";
        $data = $model->getList($this->collegeID);
        return view('college.admin.subject.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course_model = new Course();
        $course_data = $course_model->getList($this->collegeID);
        $title = "Create Subject";
        return view('college.admin.subject.create',array('title'=>$title,'course_data'=>$course_data));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'course' => 'required',
            'descr' => 'required'
        ]);

        $model = new Subject();

        $model->title = $request->input('title');
        $model->subCode = Str::slug($request->input('title'));
        $model->courseID = $request->input('course');
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->collegeID = (int)$this->collegeID;
        $model->createdBy = Auth::guard('collegeadmin')->user()->id;

        $validate = $model->chk_availability($request->input('title'),$this->collegeID);
        if($validate[0] == 1)
        {
            return redirect()->route('college.admin.addSubject')->with("error_message","Already exists !!");
        }

        $res = $model->saveData($model);
        return redirect()->route('college.admin.subjects')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course_model = new Course();
        $course_data = $course_model->getList($this->collegeID);

        $model = new Subject();

        $title = "Edit Subject";
        //$data = Course::find($id);
        $data = $model->getDataByID($id,$this->collegeID);
        if(!empty($data))
        {
            return view('college.admin.subject.edit',array('title'=>$title,'data'=>$data,'course_data'=>$course_data));
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
            'title' => 'required',
            'course' => 'required',
            'descr' => 'required'
        ]);

        $model = Subject::find($id);
        $model->title = $request->input('title');
        $model->subCode = Str::slug($request->input('title'));
        $model->courseID = $request->input('course');
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');

        $validate = $model->chk_availability($request->input('title'),$this->collegeID);
        $chkID = $model->chkID($request->input('title'),$this->collegeID,$id);
        if($validate[0] == 1 && !empty($chkID))
        {
            return redirect()->route('college.admin.editSubject',$id)->with("error_message","Already exists !!");
        }

        $model->save();

        return redirect()->route('college.admin.subjects')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
