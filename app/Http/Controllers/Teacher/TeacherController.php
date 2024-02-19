<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function login_form()
    {
        $title = "Teacher | Login";
        return view('teacher.login',compact('title'));
    }

    //todo: admin login functionality
    public function login_functionality(Request $request)
    {

        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password, 'status' =>1]))
        {
            return redirect()->route('teacher.dashboard');
        }
        else
        {
            Session::flash('error-message','Invalid Email or Password');
            return back();
        }
    }

    public function dashboard()
    {
        $title = "Teacher | Dashboard";
        return view('teacher.dashboard',compact('title'));
    }

    //todo: admin logout functionality
    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher.login');
    }
}
