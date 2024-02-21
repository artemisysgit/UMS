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

    <!-- <section class="innere-banner about-banner">
        <div class="container">
            <div class="innere-banner-text">
                <h1>{{ $collegeData->title }}</h1>
                <p>From health care to education, policy to art, artificial intelligence <br> is rapidly changing our
                    world and our daily lives.</p>
                <span><a href="index2.html">Home <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                            viewBox="0 0 7 10" fill="none">
                            <path d="M1.75 8.25L5.25 4.75L1.75 1.25" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a></span>
                <span>{{ $collegeData->title }}</span>
            </div>
        </div>
    </section> -->

    <section class="innere-banner college-details">
        <div class="container">
            <div class="innere-banner-text">
                <h1>{{ $title }}</h1>
                <p>From health care to education, policy to art, artificial intelligence <br> is rapidly changing our
                    world and our daily lives.</p>
                <span><a href="/">Home <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                            viewBox="0 0 7 10" fill="none">
                            <path d="M1.75 8.25L5.25 4.75L1.75 1.25" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a></span>
                <span>{{ $title }}</span>
            </div>
        </div>
    </section>

    <section class="about-univercity mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-univercity-img img-college-details">
                        <img src="/images/admin/college/{{ $collegeData->image }}" alt="">
                        <div class="about-univercity-icon1"><img
                                src="/images/about-univercity-icon1.png" alt=""></div>
                        <div class="about-univercity-icon2"><img
                                src="/images/about-univercity-icon2.png" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-college-details">
                        <div class="course-description">
                            <h3>Description</h3>
                            {!! $collegeData->descr !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($course_data))
    <section class="courses course-sub-sec">
        <div class="container-fluid">
            <div class="Course-detail-icon2"><img src="assets/images/course-detail/Course-detail-icon2.png" alt="">
            </div>
            <div class="Course-detail-icon3"><img src="assets/images/course-detail/Course-detail-icon3.png" alt="">
            </div>
            <div class="container  py">
                <h3>More courses</h3>
                <div class="course-sub-sec-slider courses-slider ">


                @foreach($course_data as $course)
                    <div class="courses-slide">
                        <div class="courses-slide-main">
                            <div class="courses-slider-img">
                            <a href="{{  url('/courses/course-details/'.$course->id) }}">
                                @if($collegeID == 0)
                                <img src="/images/admin/course/{{ $course->image }}" alt="">
                                @else
                                <img src="/images/college/course/{{ $course->image }}" alt="">
                                @endif
                            </a>
                            </div>
                            <div class="courses-slider-text">
                                <a href="{{  url('/courses/course-details/'.$course->id) }}">{{ $course->title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    @include('website.includes.footer')

    <button class="scrollToTop">
        <span id="progress-bar">
            <svg width="48" height="48" viewBox="-5 -5 60 60" fill="none">
                <path stroke="#824AE1" stroke-width="2" d="M0.5,25a24.5,24.5 0 1,0 49,0a24.5,24.5 0 1,0 -49,0"></path>
            </svg>
        </span>
        <div class="scrollToTop-icon"><img src="{{ url('assets/website/assets/images/scroll/arrow-down-left.png') }}" alt=""></div>
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
