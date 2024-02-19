<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Redirect;

use App\Models\superadmin\Subject_combination;
use App\Models\superadmin\Subject;

class SubjectCombinationController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware(function ($request, $next) {
            $this->collegeID = Auth::guard('admin')->user()->collegeID;
            return $next($request);
        });

    }

    public function index($subID)
    {
        $model = new Subject_combination();

        $title = "Subject Combination";
        $grid_title = "Subject Combination List";
        $combination_data = $model->getList($subID,$this->collegeID);

        $data = array(
            'title' =>$title,
            'grid_title'=>$grid_title,
            'data'=>$combination_data,
            'subID'=>$subID,
        );
        return view('admin.subject_combination.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($subID)
    {
        $model2 = new Subject_combination();
        $subject_data = $model2->getSubjectList($subID,$this->collegeID);

        $title = "Create Subject";
        $data = array(
            'title' =>$title,
            'subID'=>$subID,
            'subject_data' =>$subject_data,
        );
        return view('admin.subject_combination.create',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'combination' => 'required|min:2',
        ]);

        $model = new Subject_combination();

        $combination = $request->input('combination');
        $sub1 = 0;
        $sub2 = 0;
        $subID = $request->input('subID');

        for($i=0;$i<count($combination);$i++)
        {
            $sub1 = $combination[0];
            $sub2 = $combination[1];
        }

        $model->subID = $subID;
        $model->collegeID = $this->collegeID;
        $model->sub1 = $sub1;
        $model->sub2 = $sub2;
        $model->status = $request->input('status');
        //$model->createdBy = Auth::guard('admin')->user()->id;

        $validate = $model->chk_availability($sub1,$sub2,$request->input('subID'),$this->collegeID);
        if($validate[0] == 1)
        {
            return redirect()->route('addSubjectCombination',$subID)->with("error_message","Already exists !!");
        }
        $res = $model->saveData($model);

        $res = $model->saveData($model);
        return redirect()->route('subject_combination_list',$subID)->with('message',"Data has been saved...!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($subID,$id)
    {
        $model = new Subject_combination();
        $subject_data = $model->getSubjectList($subID,$this->collegeID);

        $title = "Edit Subject";
        $editData = $model->getDataByID($subID,$id,$this->collegeID);
        $combinations_str = $editData->sub1.','.$editData->sub2;
        $subjiect_arr= explode(',',$combinations_str);

        if(!empty($editData))
        {
            $title = "Edit Subject";
            $data = array(
                'title' =>$title,
                'subID'=>$subID,
                'id'=>$id,
                'subject_data' =>$subject_data,
                'editData'=>$editData,
                'subjiect_arr'=>$subjiect_arr
            );
            return view('admin.subject_combination.edit',$data);
        }
        else
        {
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$subID,$id)
    {
        $request->validate([
            'combination' => 'required|min:2',
        ]);

        $model = Subject_combination::find($id);
        $combination = $request->input('combination');
        $sub1 = 0;
        $sub2 = 0;
        //$subID = $request->input('subID');

        for($i=0;$i<count($combination);$i++)
        {
            $sub1 = $combination[0];
            $sub2 = $combination[1];
        }

        $model->subID = $subID;
        $model->collegeID = $this->collegeID;
        $model->sub1 = $sub1;
        $model->sub2 = $sub2;
        $model->status = $request->input('status');

        $validate = $model->chk_availability($sub1,$sub2,$request->input('subID'),$this->collegeID);
        $chkID = $model->chkID($subID,$this->collegeID,$id);
        if($validate[0] == 1 && !empty($chkID))
        {
            //return redirect()->route("editSubjectCombination",$id)->with("error_message","Already exists !!");
            return Redirect::to('admin/subjects/combinations/edit/'.$subID.'/'.$id)->with("error_message","Already exists !!");
        }

        $model->save();
        return redirect()->route('subject_combination_list',$subID)->with('message',"Data has been updated...!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
