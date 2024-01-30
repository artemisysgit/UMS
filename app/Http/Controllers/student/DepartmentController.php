<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Department;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $model = new Department();

        $title = "Departments";
        $grid_title = "Department List";
        $data = $model->getList();
        return view('student.department.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = new Department();

        $title = "Edit Department";
        $data = $model->getDataByID($id);
        if(!empty($data))
        {
            return view('student.department.edit',array('title'=>$title,'data'=>$data));
        }
        else
        {
            abort(404);
        }
    }

}
