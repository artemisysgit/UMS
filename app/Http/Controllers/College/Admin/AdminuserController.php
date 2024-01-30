<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\College\Admin;
use App\Models\College\Role;
use App\Models\College\UserRoles;

class AdminuserController extends Controller
{
    public function index()
    {
        $model = new Admin();

        $title = "Admin Users";
        $grid_title = "Admin List";
        $collegeID = Auth::guard('collegeadmin')->user()->collegeID;
        $data = $model->getList($collegeID);
        return view('college.admin.users.admin.list',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create User";
        $model = new Role();
        $roleData = $model->getList();
        return view('admin.users.admin.create',array('title'=>$title,'roleData'=>$roleData));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:admins,email',
            'pwd'=> 'required',
            'mobile'=> 'required|numeric|digits:10',
            'dob' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $upload_path = public_path().'/images/users/admins/';
        $imageName = '';

        if($request->hasFile('file'))
        {
            $imageName = time().'.'.$request->file->extension();
            $request->file->move($upload_path, $imageName);
        }

        $model = new Admin();

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
            $roles_model->type = 'admin';
            $roles_model->saveData($roles_model);
        }

        return redirect()->route('admins')->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Admin();
        $role_model = new Role();
        $user_roles_model = new UserRoles();

        $title = "Edit Admin";
        //$data = Course::find($id);
        $collegeID = Auth::guard('collegeadmin')->user()->collegeID;
        $data = $model->getDataByID($id,$collegeID);
        if(!empty($data))
        {
            $roleData = $role_model->getList();
            $user_role_data = $user_roles_model->getDataByID($id,'admin');
            if(!empty($user_role_data))
            {
                $user_role_arr = [];
                foreach($user_role_data as $r)
                {
                    $user_role_arr[] = $r->roleID;
                }

            }
            return view('admin.users.admin.edit',array('title'=>$title,'data'=>$data,'roleData'=>$roleData,'user_role_data'=>$user_role_arr));
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
        $model = Admin::find($id);

        $request->validate([
            'name' => 'required|unique:admins,userName,'.$id,
            'email'=> 'required|email|unique:admins,email,'.$id,
            //'pwd'=> 'required',
            'mobile'=> 'required|numeric|digits:10',
            'dob' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = '';
        $old_img = $model->image;
        $upload_path = public_path().'/images/users/admins/';

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
        UserRoles::where(['userID'=> $id,'type'=>'admin'])->delete();

        for($i=0;$i<$cnt;$i++)
        {
            $roles_model = new UserRoles();
            $roles_model->roleID = $request->input('roles')[$i];
            $roles_model->userID = $model->id;
            $roles_model->type = 'admin';
            $roles_model->saveData($roles_model);
        }

        return redirect()->route('admins')->with('message',"Data has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
