<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\SessionModel;
//use App\Helpers\OrderHelper;

class SessionController extends Controller
{
    public function index()
    {
        $model = new SessionModel();

        $title = "Sessions";
        $grid_title = "Session List";
        $data = $model->getList();
        return view('admin.session.sessionList',array('title'=>$title,'grid_title'=>$grid_title,'data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Session";
        return view('admin.session.addSession',array('title'=>$title));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:session_models,sessionName',
        ]);

        $model = new SessionModel();

        $model->sessionName = $request->input('title');
        $model->status = $request->input('status');
        $model->createdBy = Auth::guard('admin')->user()->id;

        $res = $model->saveData($model);
        return redirect()->route('sessions')->with('message',"Session has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new SessionModel();

        $title = "Edit Session";
        //$data = Course::find($id);
        $data = $model->getSessionByID($id);
        if(!empty($data))
        {
            return view('admin.session.editSession',array('title'=>$title,'data'=>$data));
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
            //'title' => 'required|unique:session_models,sessionName,{$id}',
            'title' => 'required|unique:session_models,sessionName,' . $id,
        ]);


        $imageName = '';

        $model = SessionModel::find($id);
        $model->sessionName = $request->input('title');
        $model->status = $request->input('status');
        $model->save();

        return redirect()->route('sessions')->with('message',"Session has been updated...!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }


}
