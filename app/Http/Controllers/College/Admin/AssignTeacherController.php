<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\College\Teacher;
use App\Models\College\Course;
use App\Models\College\Department;
use App\Models\College\Semester;
use App\Models\College\Subject;
use App\Models\College\Assign_teacher;
use App\Models\College\Assign_teacher_subject_wise;

class AssignTeacherController extends Controller
{
    public function index()
    {
        $model = new Assign_teacher();

        $title = "Assign Teacher";
        $grid_title = "Assign List";
        $data = $model->getList();
        return view('admin.assignment.teachers.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Assignment";
        $teacher_model = new Teacher();
        $teacherData = $teacher_model->getList();

        $course_model = new Course();
        $courseData = $course_model->getList();

        $dept_model = new Department();
        $deptData = $dept_model->getList();

        $subject_model = new Subject();
        $subjectData = $subject_model->getList();

        $sem_model = new Semester();
        $semData = $sem_model->getList();

        $data = array(
            'title' =>$title,
            'teacherData' =>$teacherData,
            'courseData' =>$courseData,
            'deptData' =>$deptData,
            'subjectData' =>$subjectData,
            'semData' =>$semData,
        );

        return view('admin.assignment.teachers.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher' => 'required',
            // 'course.*' => 'required',
            // 'dept.*' => 'required',
            // 'subject.*' => 'required',
            // 'sem.*' => 'required',
        ]);


        $model = new Assign_teacher();

        $model->teacherID = $request->input('teacher');
        $model->createdBy = Auth::guard('admin')->user()->id;
        $res = $model->saveData($model);

        $cnt = count($request->input('course'));
        $model2 = new Assign_teacher_subject_wise();

        for($i=0;$i<$cnt;$i++)
        {
            $model2 = new Assign_teacher_subject_wise();
            $model2->teacherID = $res;
            $model2->courseID = $request->input('course')[$i];
            $model2->deptID = $request->input('dept')[$i];
            $model2->subjectID = $request->input('subject')[$i];
            $model2->semID = $request->input('sem')[$i];
            $model2->saveData($model2);
        }

        return redirect()->route('assignList')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = "Update Assignment";
        $teacher_model = new Teacher();
        $teacherData = $teacher_model->getList();

        $course_model = new Course();
        $courseData = $course_model->getList();

        $dept_model = new Department();
        $deptData = $dept_model->getList();

        $subject_model = new Subject();
        $subjectData = $subject_model->getList();

        $sem_model = new Semester();
        $semData = $sem_model->getList();

        $model = new Assign_teacher();

        $title = "Edit Assignments";
        $assign_data = $model->getDataByID($id);

        if(!empty($assign_data))
        {
            $model2 = new Assign_teacher_subject_wise();
            $line_item_data = $model2->getDataByTeacherID($id);

            $data = array(
                'title' =>$title,
                'teacherData' =>$teacherData,
                'courseData' =>$courseData,
                'deptData' =>$deptData,
                'subjectData' =>$subjectData,
                'semData' =>$semData,
                'assign_data'=>$assign_data,
                'line_item_data'=>$line_item_data
            );
            return view('admin.assignment.teachers.edit',$data);
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
            'teacher' => 'required',
        ]);

        $model = Assign_teacher::find($id);
        $model->teacherID = $request->input('teacher');
        //$model->createdBy = Auth::guard('admin')->user()->id;
        $res = $model->save();

        $cnt = count($request->input('course'));
        for($i=0;$i<$cnt;$i++)
        {
            $model2 = new Assign_teacher_subject_wise();

            $item_id = (int)$request->input('item_id')[$i];
            $data = array(
                'teacherID'=>$id,
                'courseID'=>$request->input('course')[$i],
                'deptID'=>$request->input('dept')[$i],
                'subjectID'=>$request->input('subject')[$i],
                'semID'=>$request->input('sem')[$i],
            );
            $model2->updateData($data,$item_id);
        }

        return redirect()->route('assignList')->with('message',"Data has been updated...!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

    public function add_line_items(Request $request)
    {
        $course_model = new Course();
        $courseData = $course_model->getList();

        $dept_model = new Department();
        $deptData = $dept_model->getList();

        $subject_model = new Subject();
        $subjectData = $subject_model->getList();

        $sem_model = new Semester();
        $semData = $sem_model->getList();

        $cnt = $request->post('cnt');

        $data = array(
            'courseData' =>$courseData,
            'deptData' =>$deptData,
            'subjectData' =>$subjectData,
            'semData' =>$semData,
            'cnt' =>(int)$cnt
        );

        $html = view('admin.assignment.teachers.add_line_item',$data)->render();
        echo $html;
    }

    public function del_line_item(Request $request)
    {
        $id = (int)$request->post('id');
        $model = Assign_teacher_subject_wise::find($id);
        $res = $model->delete();
        echo $res;

    }
}
