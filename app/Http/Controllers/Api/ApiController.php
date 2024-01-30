<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\frontend\Enquiry;

class ApiController extends Controller
{
    public function postContact(Request $request)
    {
        //echo "<pre>"; print_r($request->all());
        $model = new Enquiry();

        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->phone = $request->input('phone');
        $model->dob = date('Y-m-d',strtotime($request->input('dob')));
        $model->message = htmlentities($request->input('message'));
        //$res = $model->saveData($model);

        return response()->json(['success' => true,'msg'=>"Enquiry send successfully...!"],200);

    }
}
