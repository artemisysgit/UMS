<?php

namespace App\Http\Controllers\College\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Helpers\OrderHelper;


class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('admin');

    }

    //todo: admin login form
    public function login_form()
    {
        $title = "Admin | Login";
        return view('college.admin.login',compact('title'));
    }

    //todo: admin login functionality
    public function login_functionality(Request $request){
        $request->validate([
            'email'=>'required',
            'collegeID'=>'required',
            'password'=>'required',
        ]);

        if (Auth::guard('collegeadmin')->attempt(['email' => $request->email, 'password' => $request->password, 'collegeID'=>$request->collegeID, 'status' =>1])) {
            return redirect()->route('college.admin.dashboard');
        }else{
            Session::flash('error-message','Invalid Email or Password');
            return back();
        }
    }

    public function dashboard()
    {
        $data = Auth::guard('collegeadmin')->user();
        if(!Auth::guard('collegeadmin')->check()){
            return redirect('/college/admin');
        }

        $title = "Admin | Dashboard";
        //return view('admin.dashboard',compact('title','data'));
        return view('college.admin.dashboard',array('title'=>$title,'data'=>$data));
    }


    //todo: admin logout functionality
    public function logout(){
        Auth::guard('collegeadmin')->logout();
        return redirect()->route('collegelogin.form');
    }

}
