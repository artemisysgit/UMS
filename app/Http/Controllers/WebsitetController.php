<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\frontend\Benefit;
use App\Models\frontend\Department;
use App\Models\frontend\Course;
use App\Models\frontend\Enquiry;

class WebsitetController extends Controller
{
    public function index()
    {
        $title = "Unicampus | Home ";
        $benefit_model = new Benefit();
        $benefit_data = $benefit_model->getList();

        $dept_model = new Department();
        $dept_data = $dept_model->getList();

        $course_model = new Course();
        $course_type = Course::COURSE_TYPE;
        $course_data = $course_model->getList(null,0);

        $data = array(
            'title' =>$title,
            'benefit_data' =>$benefit_data,
            'dept_data' =>$dept_data,
            'course_type' => $course_type,
            'course_data' =>$course_data,
        );
        return view('welcome',$data);
    }

    public function about_us()
    {
        $title = "About Us";

        $data = array(
            'title' =>$title,
            // 'benefit_data' =>$benefit_data,
            // 'dept_data' =>$dept_data,
            // 'course_type' => $course_type,
            // 'course_data' =>$course_data,
        );
        return view('about_us',$data);
    }

    public function contact_us()
    {
        $title = "Contact Us";

        $data = array(
            'title' =>$title,
        );
        return view('contact_us',$data);
    }

    public function enquiry(Request $request)
    {
        $model = new Enquiry();

        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:enquiries,email',
            'phone'=> 'required|numeric',
            'dob'=> 'required'
        ]);

        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->phone = $request->input('phone');
        $model->dob = date('Y-m-d',strtotime($request->input('dob')));
        $model->message = htmlentities($request->input('message'));
        $res = $model->saveData($model);

        return redirect()->route('/')->with('message',"Enquiry send successfully...!");
    }

    public function store(Request $request)
    {
        //dd($request);
    }

    public function ajax_filter_type_data(Request $request)
    {
        $course_model = new Course();

        $course_type = (int)$request->input('type');
        $course_data = $course_model->getList($course_type,0);

        //dd($course_data);die;

        if(!empty($course_data))
        {
            $html = '';
            foreach($course_data as $r)
            {
                $title = $r->title;
                $image = "/images/admin/course/".$r->image;
                $html.= '

                <div class="courses-slide">
                    <div class="courses-slide-main">
                        <div class="courses-slider-img"><img src="'.$image.'" alt=""></div>
                        <div class="courses-slider-text">
                            <ul class="course-detail d-flex align-items-center justify-content-between ">
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M2.6665 13V3.00004C2.6665 2.55801 2.8421 2.13409 3.15466 1.82153C3.46722 1.50897 3.89114 1.33337 4.33317 1.33337H13.3332V14.6667H4.33317C3.89114 14.6667 3.46722 14.4911 3.15466 14.1786C2.8421 13.866 2.6665 13.4421 2.6665 13ZM2.6665 13C2.6665 12.558 2.8421 12.1341 3.15466 11.8215C3.46722 11.509 3.89114 11.3334 4.33317 11.3334H13.3332"
                                            stroke="#DD9F00" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M5.3335 4.66663H9.3335" stroke="#DD9F00" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> 43 Lessons</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M10.6668 14V12.6667C10.6668 11.9594 10.3859 11.2811 9.88578 10.781C9.38568 10.281 8.70741 10 8.00016 10H4.00016C3.29292 10 2.61464 10.281 2.11454 10.781C1.61445 11.2811 1.3335 11.9594 1.3335 12.6667V14"
                                            stroke="#DD9F00" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00016 7.33333C7.47292 7.33333 8.66683 6.13943 8.66683 4.66667C8.66683 3.19391 7.47292 2 6.00016 2C4.5274 2 3.3335 3.19391 3.3335 4.66667C3.3335 6.13943 4.5274 7.33333 6.00016 7.33333Z"
                                            stroke="#DD9F00" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.6665 14V12.6667C14.6661 12.0758 14.4694 11.5019 14.1074 11.0349C13.7454 10.5679 13.2386 10.2344 12.6665 10.0867"
                                            stroke="#DD9F00" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M10.6665 2.08667C11.2401 2.23354 11.7485 2.56714 12.1116 3.03488C12.4747 3.50262 12.6717 4.07789 12.6717 4.67C12.6717 5.26212 12.4747 5.83739 12.1116 6.30513C11.7485 6.77287 11.2401 7.10647 10.6665 7.25334"
                                            stroke="#DD9F00" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg> 64 Students</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_212_165)">
                                            <path
                                                d="M8.00016 14.6667C11.6821 14.6667 14.6668 11.6819 14.6668 8.00004C14.6668 4.31814 11.6821 1.33337 8.00016 1.33337C4.31826 1.33337 1.3335 4.31814 1.3335 8.00004C1.3335 11.6819 4.31826 14.6667 8.00016 14.6667Z"
                                                stroke="#DD9F00" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8 4V8L10.6667 9.33333" stroke="#DD9F00" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_212_165">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> 3 Years</li>
                            </ul>
                            <a href="#">'.$title.'</a>

                        </div>
                    </div>
                </div>

                ';
            }

            echo $html;
        }


    }

}
