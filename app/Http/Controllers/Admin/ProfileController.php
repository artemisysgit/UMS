<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Admin;
use App\Models\Country;

class ProfileController extends Controller
{
    public function index()
    {
        $model = new Admin();

        $title = "Account";
        $page_title = "Profile Details";
        $data = $model->getList();
        $countryData = Country::all();

        $id = Auth::guard('admin')->user()->id;
        $profileImageData = Admin::find($id);

        if(!empty($profileImageData->image))
        {
            $profileImage = 'images/users/admins/'.$profileImageData->image;
        }
        else
        {
            $profileImage = 'assets/img/avatars/14.png';
        }

        return view('profile.profile',array('title'=>$title,'page_title'=>$page_title,'data'=>$data,'countryData'=>$countryData,'profileImage'=>$profileImage,'profileImageData'=>$profileImageData));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Course";
        return view('admin.course.addCourse',array('title'=>$title));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;

        $model = Admin::find($id);

        $request->validate([
            'email'=> 'required|email|unique:admins,email,'.$id,
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $model->name = $request->input('name');
        $model->userName = Str::slug($request->input('name'));
        $model->email = $request->input('email');
        $model->mobile = $request->input('phone');
        $model->state = $request->input('state');
        $model->countryID = $request->input('country');
        $model->district = $request->input('district');
        $model->address = htmlentities($request->input('address'));
        $model->pinCode = $request->input('pinCode');
        //$model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);

        return redirect()->route('profile')->with('message',"Data has been updated...!");
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

    public function uploadImage(Request $request)
    {
        //print_r($_FILES);die;

        $request->validate([

            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        //$model = new Admin();
        $id = Auth::guard('admin')->user()->id;
        $model = Admin::find($id);
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

            $model->image = $imageName;
            $model->save();
            echo true;
        }
        // else
        // {
        //     $imageName = $request->txt_file;
        //     echo true;
        // }
    }
}
