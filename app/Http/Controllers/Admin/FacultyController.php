<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\superadmin\Teacher;
use App\Models\superadmin\Role;
use App\Models\superadmin\UserRoles;

class FacultyController extends Controller
{
    public function index()
    {
        $model = new Teacher();

        $title = "Faculty Users";
        $grid_title = "Faculty List";
        $data = $model->getList();
        return view('admin.users.normal.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Role();
        $title = "Create User";
        $roleData = $model->getList();
        return view('admin.users.normal.create',array('title'=>$title,'roleData'=>$roleData));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:teachers,email',
            'pwd'=> 'required',
            'mobile'=> 'required|numeric|digits:10',
            'dob' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $upload_path = public_path().'/images/users/faculty/';
        $imageName = '';

        if($request->hasFile('file'))
        {
            $imageName = time().'.'.$request->file->extension();
            $request->file->move($upload_path, $imageName);
        }

        $model = new Teacher();

        $model->name = $request->input('name');
        $model->userName = Str::slug($request->input('name'));
        $model->email = $request->input('email');

        if(!empty($request->input('pwd')))
        {
            $model->password = Hash::make($request->input('pwd'));
        }

        $model->mobile = $request->input('mobile');
        $model->dob = date('Y-m-d',strtotime($request->input('dob')));
        $model->image = $imageName;
        $model->status = $request->input('status');
        //$model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);

        $cnt = count($request->input('roles'));

        for($i=0;$i<$cnt;$i++)
        {
            $roles_model = new UserRoles();
            $roles_model->roleID = $request->input('roles')[$i];
            $roles_model->userID = $res;
            $roles_model->type = 'faculty';
            $roles_model->saveData($roles_model);
        }

        return redirect()->route('faculties')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Teacher();
        $role_model = new Role();
        $user_roles_model = new UserRoles();

        $title = "Edit Faculty";
        //$data = Course::find($id);
        $data = $model->getDataByID($id);

        if(!empty($data))
        {
            $roleData = $role_model->getList();
            $user_role_data = $user_roles_model->getDataByID($id,'faculty');
            //echo "<pre>";print_r($user_role_data);die;
            if(!empty($user_role_data))
            {
                $user_role_arr = [];
                foreach($user_role_data as $r)
                {
                    $user_role_arr[] = $r->roleID;
                }

            }
            //echo "<pre>";print_r($user_role_arr);die;
            return view('admin.users.normal.edit',array('title'=>$title,'data'=>$data,'roleData'=>$roleData,'user_role_data'=>$user_role_arr));
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
        $model = Teacher::find($id);

        $request->validate([
            'name' => 'required|unique:teachers,userName,'.$id,
            'email'=> 'required|email|unique:teachers,email,'.$id,
            //'pwd'=> 'required',
            'mobile'=> 'required|numeric|digits:10',
            'dob' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = '';
        $old_img = $model->image;
        $upload_path = public_path().'/images/users/faculty/';

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

        $model->name = $request->input('name');
        $model->userName = Str::slug($request->input('name'));
        $model->email = $request->input('email');
        if(!empty($request->input('pwd')))
        {
            $model->password = Hash::make($request->input('pwd'));
        }
        $model->mobile = $request->input('mobile');
        $model->dob = date('Y-m-d',strtotime($request->input('dob')));
        $model->image = $imageName;
        $model->status = $request->input('status');
        $model->save();

        $cnt = count($request->input('roles'));

        $roles_model = new UserRoles();
        //UserRoles::where('userID', $id)->delete();
        UserRoles::where(['userID'=> $id,'type'=>'faculty'])->delete();

        for($i=0;$i<$cnt;$i++)
        {
            $roles_model = new UserRoles();
            $roles_model->roleID = $request->input('roles')[$i];
            $roles_model->userID = $model->id;
            $roles_model->type = 'faculty';
            $roles_model->saveData($roles_model);
        }

        return redirect()->route('faculties')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
