<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Frontend\Teacher;

class FacultyController extends Controller
{
    public function index()
    {
        $model = new Teacher();

        $title = "Faculties";
        $grid_title = "Faculty List";
        $data = $model->getList();
        //echo "<pre>";print_r($data);die;
        return view('student.faculties.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = new Teacher();

        $title = "Edit Faculty";
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            return view('student.faculties.edit',array('title'=>$title,'data'=>$data));
        }
        else
        {
            abort(404);
        }
    }
}
