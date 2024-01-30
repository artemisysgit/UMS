<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.login',compact('title'));
    }

    //todo: admin login functionality
    public function login_functionality(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' =>1])) {
            return redirect()->route('dashboard');
        }else{
            Session::flash('error-message','Invalid Email or Password');
            return back();
        }
    }

    public function dashboard()
    {
        $data = Auth::guard('admin')->user();
        if(!Auth::guard('admin')->check()){
            return redirect('/admin');
        }

        $title = "Admin | Dashboard";
        //return view('admin.dashboard',compact('title','data'));
        return view('admin.dashboard',array('title'=>$title,'data'=>$data));
    }

    //todo: admin logout functionality
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login.form');
    }

}
