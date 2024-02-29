<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\frontend\User;
use App\Helpers\helpers;

class RegisterController extends Controller
{
    public function index()
    {
        $title = "Unicampus | Student Registration ";
        $user_model = new User();
        //$user_data = $user_model->getList();

        $data = array(
            'title' =>$title,
            //'about_data' =>$about_data,
        );
        return view('register',$data);
    }
}
