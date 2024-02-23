<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/tex-gyre-adventor" type="text/css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ url('assets/website/assets/css/style.css') }}">

    <title>{{ $title }}</title>
</head>


<body>

    @include('website.includes.header')

    <section class="innere-banner course-details-banner" style="background:{{ url('assets/website/assets/images/logo/course-banner.png') }}">
        <div class="container">
            <div class="innere-banner-text">
                <h1>English Literature: Be as Informed <br> as a Literature Graduate</h1>
                <p>The development of English Literature from its earliest texts <br> to the present day</p>
                <span><a href="{{ route('courses') }}">Home <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                            viewBox="0 0 7 10" fill="none">
                            <path d="M1.75 8.25L5.25 4.75L1.75 1.25" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a></span>
                <span><a href="{{ route('website.courses') }}">Course <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                            viewBox="0 0 7 10" fill="none">
                            <path d="M1.75 8.25L5.25 4.75L1.75 1.25" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a></span>
                <span>{{ $course_data->title }}</span>
            </div>
        </div>
    </section>

    <section class="mb course-sec">
        <div class="Course-detail-icon1">
            <img src="assets/images/course-detail/Course-detail-icon1.png" alt="">
        </div>
        <div class="container">
            <div class="course-sub">
                <div class="main-details-course">
                    <div class="course-description">
                        <h3>Description</h3>

                        {!! $course_data->descr !!}

                    </div>
                    @if(!$subject_data->isEmpty())
                    <div class="semester">
                        <h3>Subject Details</h3>
                        <div id="accordionExample" class="accordion shadow">

                        @if(!empty($subject_data))
                        @foreach($subject_data as $sub)

                            <!-- Accordion item 1 -->
                            <div class="card">
                                <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                                    <h2 class="mb-0">
                                        <button type="button" data-toggle="collapse" data-target="#{{ $loop->iteration }}"
                                            aria-expanded="true" aria-controls="collapseOne"
                                            class="btn btn-link text-dark font-weight-bold collapsible-link">
                                            <div class="accordionExample-title d-flex align-items-center">
                                                <span class="">{{ $loop->iteration }}</span>
                                                {{ $sub->title }}
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M6 9L12 15L18 9" stroke="#3D3D3D" stroke-width="2.3"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </h2>
                                </div>
                                <div id="{{ $loop->iteration }}" aria-labelledby="headingOne" data-parent="#accordionExample"
                                    class="collapse {{ $loop->iteration == 1?'show':'' }}">
                                    <div class="card-body">
                                        {!! $sub->descr !!}
                                        <hr>

                                        <h3>Combinations :- </h3>

                                        <!-- {{ getSubjectCombination($sub->id ,$sub->courseID, $sub->collegeID) }} -->

                                        @foreach(getSubjectCombination($sub->id ,$sub->courseID, $sub->collegeID) as $r)
                                        <ul>
                                            <li class="d-flex align-items-center ">
                                               {{ $loop->iteration }} .  {{ $r->sub1.' - '.$r->sub2 }}
                                            </li>
                                        </ul>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                        @endforeach
                        @endif

                        </div><!-- End -->
                    </div>
                    @endif
                    <div class="requirements">
                        <h3>Requirements</h3>
                        <ul>
                            <li class="d-flex align-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <g clip-path="url(#clip0_683_394)">
                                        <path
                                            d="M9.99935 18.3333C14.6017 18.3333 18.3327 14.6023 18.3327 9.99996C18.3327 5.39759 14.6017 1.66663 9.99935 1.66663C5.39698 1.66663 1.66602 5.39759 1.66602 9.99996C1.66602 14.6023 5.39698 18.3333 9.99935 18.3333Z"
                                            stroke="url(#paint0_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7.5 10L9.16667 11.6667L12.5 8.33337"
                                            stroke="url(#paint1_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_683_394" x1="2.45033" y1="9.99995"
                                            x2="17.6954" y2="9.99995" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_683_394" x1="7.73529" y1="10" x2="12.3088"
                                            y2="10" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <clipPath id="clip0_683_394">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> You love reading
                            </li>
                            <li class="d-flex align-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <g clip-path="url(#clip0_683_394)">
                                        <path
                                            d="M9.99935 18.3333C14.6017 18.3333 18.3327 14.6023 18.3327 9.99996C18.3327 5.39759 14.6017 1.66663 9.99935 1.66663C5.39698 1.66663 1.66602 5.39759 1.66602 9.99996C1.66602 14.6023 5.39698 18.3333 9.99935 18.3333Z"
                                            stroke="url(#paint0_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7.5 10L9.16667 11.6667L12.5 8.33337"
                                            stroke="url(#paint1_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_683_394" x1="2.45033" y1="9.99995"
                                            x2="17.6954" y2="9.99995" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_683_394" x1="7.73529" y1="10" x2="12.3088"
                                            y2="10" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <clipPath id="clip0_683_394">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Graduate
                            </li>
                            <li class="d-flex align-items-center "><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_683_394)">
                                        <path
                                            d="M9.99935 18.3333C14.6017 18.3333 18.3327 14.6023 18.3327 9.99996C18.3327 5.39759 14.6017 1.66663 9.99935 1.66663C5.39698 1.66663 1.66602 5.39759 1.66602 9.99996C1.66602 14.6023 5.39698 18.3333 9.99935 18.3333Z"
                                            stroke="url(#paint0_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7.5 10L9.16667 11.6667L12.5 8.33337"
                                            stroke="url(#paint1_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_683_394" x1="2.45033" y1="9.99995"
                                            x2="17.6954" y2="9.99995" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_683_394" x1="7.73529" y1="10" x2="12.3088"
                                            y2="10" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <clipPath id="clip0_683_394">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Donec lobortis massa</li>
                            <li class="d-flex align-items-center "><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_683_394)">
                                        <path
                                            d="M9.99935 18.3333C14.6017 18.3333 18.3327 14.6023 18.3327 9.99996C18.3327 5.39759 14.6017 1.66663 9.99935 1.66663C5.39698 1.66663 1.66602 5.39759 1.66602 9.99996C1.66602 14.6023 5.39698 18.3333 9.99935 18.3333Z"
                                            stroke="url(#paint0_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7.5 10L9.16667 11.6667L12.5 8.33337"
                                            stroke="url(#paint1_linear_683_394)" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_683_394" x1="2.45033" y1="9.99995"
                                            x2="17.6954" y2="9.99995" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_683_394" x1="7.73529" y1="10" x2="12.3088"
                                            y2="10" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B62DE" />
                                            <stop offset="1" stop-color="#824AE1" />
                                        </linearGradient>
                                        <clipPath id="clip0_683_394">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Nunc in diam at augue vehicula</li>
                        </ul>
                    </div>
                </div>
                <div class="main-details-two">
                    <div class="sub-details-course">
                        <div class="courses-slide-main">
                            <div class="courses-slider-img">
                                @if($collegeID == 0)
                                <img src="/images/admin/course/{{ $course_data->image }}" alt="">
                                @else
                                <img src="/images/college/course/{{ $course_data->image }}" alt="">
                                @endif
                            </div>
                            <div class="courses-slider-text">
                                <ul class="course-detail d-flex align-items-center justify-content-between ">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none">
                                            <path
                                                d="M2.6665 13V3.00004C2.6665 2.55801 2.8421 2.13409 3.15466 1.82153C3.46722 1.50897 3.89114 1.33337 4.33317 1.33337H13.3332V14.6667H4.33317C3.89114 14.6667 3.46722 14.4911 3.15466 14.1786C2.8421 13.866 2.6665 13.4421 2.6665 13ZM2.6665 13C2.6665 12.558 2.8421 12.1341 3.15466 11.8215C3.46722 11.509 3.89114 11.3334 4.33317 11.3334H13.3332"
                                                stroke="#DD9F00" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5.3335 4.66663H9.3335" stroke="#DD9F00" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 43 Lessons</li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none">
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
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none">
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
                                <h4>This course includes:</h4>
                                <ul class="sub-details-course-details">
                                    <li class="d-flex align-items-center "><svg xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <g clip-path="url(#clip0_683_575)">
                                                <path
                                                    d="M9.50065 17.4166C13.8729 17.4166 17.4173 13.8722 17.4173 9.49992C17.4173 5.12766 13.8729 1.58325 9.50065 1.58325C5.1284 1.58325 1.58398 5.12766 1.58398 9.49992C1.58398 13.8722 5.1284 17.4166 9.50065 17.4166Z"
                                                    stroke="url(#paint0_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.125 9.50008L8.70833 11.0834L11.875 7.91675"
                                                    stroke="url(#paint1_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_683_575" x1="2.32908" y1="9.49991"
                                                    x2="16.8119" y2="9.49991" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_683_575" x1="7.34853" y1="9.50008"
                                                    x2="11.6934" y2="9.50008" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <clipPath id="clip0_683_575">
                                                    <rect width="19" height="19" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> 233 Theory classes
                                    </li>
                                    <li class="d-flex align-items-center "><svg xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <g clip-path="url(#clip0_683_575)">
                                                <path
                                                    d="M9.50065 17.4166C13.8729 17.4166 17.4173 13.8722 17.4173 9.49992C17.4173 5.12766 13.8729 1.58325 9.50065 1.58325C5.1284 1.58325 1.58398 5.12766 1.58398 9.49992C1.58398 13.8722 5.1284 17.4166 9.50065 17.4166Z"
                                                    stroke="url(#paint0_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.125 9.50008L8.70833 11.0834L11.875 7.91675"
                                                    stroke="url(#paint1_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_683_575" x1="2.32908" y1="9.49991"
                                                    x2="16.8119" y2="9.49991" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_683_575" x1="7.34853" y1="9.50008"
                                                    x2="11.6934" y2="9.50008" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <clipPath id="clip0_683_575">
                                                    <rect width="19" height="19" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> 87 Practical class
                                    </li>
                                    <li class="d-flex align-items-center "><svg xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <g clip-path="url(#clip0_683_575)">
                                                <path
                                                    d="M9.50065 17.4166C13.8729 17.4166 17.4173 13.8722 17.4173 9.49992C17.4173 5.12766 13.8729 1.58325 9.50065 1.58325C5.1284 1.58325 1.58398 5.12766 1.58398 9.49992C1.58398 13.8722 5.1284 17.4166 9.50065 17.4166Z"
                                                    stroke="url(#paint0_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.125 9.50008L8.70833 11.0834L11.875 7.91675"
                                                    stroke="url(#paint1_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_683_575" x1="2.32908" y1="9.49991"
                                                    x2="16.8119" y2="9.49991" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_683_575" x1="7.34853" y1="9.50008"
                                                    x2="11.6934" y2="9.50008" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <clipPath id="clip0_683_575">
                                                    <rect width="19" height="19" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> 33 Extra classes
                                    </li>
                                    <li class="d-flex align-items-center "><svg xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <g clip-path="url(#clip0_683_575)">
                                                <path
                                                    d="M9.50065 17.4166C13.8729 17.4166 17.4173 13.8722 17.4173 9.49992C17.4173 5.12766 13.8729 1.58325 9.50065 1.58325C5.1284 1.58325 1.58398 5.12766 1.58398 9.49992C1.58398 13.8722 5.1284 17.4166 9.50065 17.4166Z"
                                                    stroke="url(#paint0_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.125 9.50008L8.70833 11.0834L11.875 7.91675"
                                                    stroke="url(#paint1_linear_683_575)" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_683_575" x1="2.32908" y1="9.49991"
                                                    x2="16.8119" y2="9.49991" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_683_575" x1="7.34853" y1="9.50008"
                                                    x2="11.6934" y2="9.50008" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#2B62DE" />
                                                    <stop offset="1" stop-color="#824AE1" />
                                                </linearGradient>
                                                <clipPath id="clip0_683_575">
                                                    <rect width="19" height="19" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> Certificate of completion
                                    </li>
                                </ul>
                                <h4>Subscribe to get latest news</h4>
                                <p>Unicampus Management System stands out for its exceptional combination.</p>
                                <form action="">
                                    <div class="sub-details-course-form">
                                        <input type="email" placeholder="Enter your email">
                                        <div class="mail-icon">
                                            <svg width="50" height="34" viewBox="0 0 50 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M31.1668 18.4165V8.49984C31.1668 7.74839 30.8683 7.02772 30.337 6.49637C29.8056 5.96501 29.0849 5.6665 28.3335 5.6665H5.66683C4.91538 5.6665 4.19471 5.96501 3.66336 6.49637C3.13201 7.02772 2.8335 7.74839 2.8335 8.49984V25.4998C2.8335 27.0582 4.1085 28.3332 5.66683 28.3332H17.0002"
                                                    stroke="#C5C5C5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M31.1668 9.9165L18.4593 17.9915C18.022 18.2655 17.5163 18.4109 17.0002 18.4109C16.484 18.4109 15.9784 18.2655 15.541 17.9915L2.8335 9.9165"
                                                    stroke="#C5C5C5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M22.6665 26.9168L25.4998 29.7502L31.1665 24.0835" stroke="#C5C5C5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <line x1="49.5" y1="7" x2="49.5" y2="27" stroke="#D8E5ED" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="btn-main">
                                        <span class="master-btn">
                                            <button type="button"
                                                class=" d-flex align-items-center justify-content-center">Subscribe Now
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none">
                                                    <path d="M16.5 7.33325L20.1667 10.9999L16.5 14.6666" stroke="white"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1.8335 11H20.1668" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="courses course-sub-sec">
        <div class="container-fluid">
            <div class="Course-detail-icon2"><img src="assets/images/course-detail/Course-detail-icon2.png" alt=""></div>
            <div class="Course-detail-icon3"><img src="assets/images/course-detail/Course-detail-icon3.png" alt=""></div>
            <div class="container  py">
                <h3>More courses</h3>
                <div class="course-sub-sec-slider courses-slider ">
                    <div class="courses-slide">
                        <div class="courses-slide-main">
                            <div class="courses-slider-img"><img src="assets/images/courses/courses1.png" alt=""></div>
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
                                <a href="#">Studying Principles of Educational Organizational.</a>
                                <ul class="courses-rateing">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>/ 5.0 Rating</li>
                                </ul>
                                <div class="course-fee">Tuition Fees: <span>6.3 L</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-slide">
                        <div class="courses-slide-main">
                            <div class="courses-slider-img"><img src="assets/images/courses/courses2.png" alt=""></div>
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
                                <a href="#">Studying Principles of Educational Organizational.</a>
                                <ul class="courses-rateing">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>/ 5.0 Rating</li>
                                </ul>
                                <div class="course-fee">Tuition Fees: <span>6.3 L</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-slide">
                        <div class="courses-slide-main">
                            <div class="courses-slider-img"><img src="assets/images/courses/courses3.png" alt=""></div>
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
                                <a href="#">Studying Principles of Educational Organizational.</a>
                                <ul class="courses-rateing">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>/ 5.0 Rating</li>
                                </ul>
                                <div class="course-fee">Tuition Fees: <span>6.3 L</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-slide">
                        <div class="courses-slide-main">
                            <div class="courses-slider-img"><img src="assets/images/courses/courses3.png" alt=""></div>
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
                                <a href="#">Studying Principles of Educational Organizational.</a>
                                <ul class="courses-rateing">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.55181 2.24169C7.73523 1.8701 8.2651 1.87011 8.44852 2.24169L9.94394 5.27125C10.0167 5.41868 10.1573 5.52091 10.32 5.54468L13.6649 6.0336C14.0749 6.09352 14.2383 6.59744 13.9415 6.88652L11.5219 9.24321C11.404 9.35808 11.3501 9.52365 11.378 9.68591L11.9489 13.0147C12.0189 13.4232 11.5902 13.7347 11.2233 13.5417L8.23289 11.9691C8.0872 11.8925 7.91313 11.8925 7.76744 11.9691L4.77698 13.5417C4.41016 13.7347 3.98139 13.4232 4.05145 13.0147L4.62237 9.68591C4.6502 9.52365 4.59637 9.35808 4.47843 9.24321L2.05884 6.88652C1.76204 6.59744 1.92543 6.09352 2.33539 6.0336L5.68035 5.54468C5.84302 5.52091 5.98362 5.41868 6.05639 5.27125L7.55181 2.24169Z"
                                                fill="#F3970C" stroke="#F3970C" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </li>
                                    <li>/ 5.0 Rating</li>
                                </ul>
                                <div class="course-fee">Tuition Fees: <span>6.3 L</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    @include('website.includes.footer')

    <button class="scrollToTop">
        <span id="progress-bar">
            <svg width="48" height="48" viewBox="-5 -5 60 60" fill="none">
                <path stroke="#824AE1" stroke-width="2" d="M0.5,25a24.5,24.5 0 1,0 49,0a24.5,24.5 0 1,0 -49,0"></path>
            </svg>
        </span>
        <div class="scrollToTop-icon"><img src="{{ url('assets/website/assets/images/scroll/arrow-down-left.png') }}"
                alt=""></div>
    </button>









    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ url('assets/website/assets/js/main.js') }}"></script>
</body>

</html>
