<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\superadmin\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware(function ($request, $next) {
            $this->collegeID = Auth::guard('admin')->user()->collegeID;
            return $next($request);
        });

    }

    public function index()
    {
        $model = new Role();

        $title = "Role";
        $grid_title = "Role List";
        $data = $model->getList($this->collegeID);
        return view('admin.role.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Role";
        return view('admin.role.create',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:roles,title',
            'descr' => 'required'
        ]);

        $model = new Role();

        $model->title = $request->input('title');
        $model->roleCode = Str::slug($request->input('title'));
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);
        return redirect()->route('roles')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Role();

        $title = "Edit Role";
        //$data = Course::find($id);
        $data = $model->getDataByID($id,$this->collegeID);
        if(!empty($data))
        {
            return view('admin.role.edit',array('title'=>$title,'data'=>$data));
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
            //'title' => 'required|unique:roles,title,{$id}',
            'title' => 'required|unique:roles,title,' . $id,
            'descr' => 'required'
        ]);


        $imageName = '';

        $model = Role::find($id);
        $model->title = $request->input('title');
        $model->descr = $request->input('descr');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('roles')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
