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

    <section class="innere-banner about-banner">
        <div class="container">
            <div class="innere-banner-text">
                <h1>About Us</h1>
                <p>From health care to education, policy to art, artificial intelligence <br> is rapidly changing our
                    world and our daily lives.</p>
                <span><a href="/">Home <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                            viewBox="0 0 7 10" fill="none">
                            <path d="M1.75 8.25L5.25 4.75L1.75 1.25" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a></span>
                <span>About Us</span>
            </div>
        </div>
    </section>

    <section class="about-counter mb">
        <div class="container">
            <div class="about-counter-main d-flex align-items-center ">
                <div class="about-counter-sub">
                    <div class="about-counter-sub-box d-flex align-items-center">
                        <div class="about-counter-sub-img"><img src="{{ url('assets/website/assets/images/about-counter/about-counter1.png') }}"
                                alt=""></div>
                        <div class="about-counter-sub-text">
                            <h3>45K+</h3>
                            <p>Active Students</p>
                        </div>
                    </div>
                </div>
                <div class="about-counter-sub">
                    <div class="about-counter-sub-box d-flex align-items-center">
                        <div class="about-counter-sub-img"><img src="{{ url('assets/website/assets/images/about-counter/about-counter2.png') }}"
                                alt=""></div>
                        <div class="about-counter-sub-text">
                            <h3>93+</h3>
                            <p>Best Professors</p>
                        </div>
                    </div>
                </div>
                <div class="about-counter-sub">
                    <div class="about-counter-sub-box d-flex align-items-center">
                        <div class="about-counter-sub-img"><img src="{{ url('assets/website/assets/images/about-counter/about-counter3.png') }}"
                                alt=""></div>
                        <div class="about-counter-sub-text">
                            <h3>87+</h3>
                            <p>Award Achieved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-univercity mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-univercity-img">
                        <img src="{{ url('assets/website/assets/images/about-univercity/about-univercity.png') }}" alt="">
                        <div class="about-univercity-icon1"><img
                                src="{{ url('assets/website/assets/images/about-univercity/about-univercity-icon1.png') }}" alt=""></div>
                        <div class="about-univercity-icon2"><img
                                src="{{ url('assets/website/assets/images/about-univercity/about-univercity-icon2.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-univercity-text">
                        <div class="heading">
                            <h5>About Our University <div class="sub-heading-bg"><img
                                        src="{{ url('assets/website/assets/images/heading/heading-bg.png') }}" alt=""></div>
                            </h5>
                            <h2>A few words about the university</h2>
                            <p>Experience seamless functionality with a range of cross-platform features and an
                                intuitive yet powerful interface in our comprehensive campus management solutions for
                                educational institutions.</p>
                        </div>
                        <ul>
                            <li class="d-flex align-items-center ">
                                <span class="about-univercity-count">01</span> Doctoral Degrees
                            </li>
                            <li class="d-flex align-items-center ">
                                <span class="about-univercity-count">02</span> Global Students
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="scholarship mb">
        <div class="container">
            <div class="scholarship-img"><img src="{{ url('assets/website/assets/images/scholarship/Scholarship-Charecter.png') }}" alt=""></div>
            <div class="scholarship-text">
                <h2>Scholarship Programs</h2>
                <p>Experience seamless functionality with a range of cross-platform features and an intuitive yet
                    powerful interface in our comprehensive campus management solutions for educational institutions.
                </p>
                <div class="scholarship-sub-btn">
                    <a href="#" class="d-flex align-items-center ">
                        Contact Us
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="move-right">
                                <path id="Vector" d="M16.5 7.33334L20.1667 11L16.5 14.6667" stroke="#6952E1"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Vector_2" d="M1.8335 11H20.1668" stroke="#6952E1" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="professor mb">
        <div class="professor-icon"><img src="{{ url('assets/website/assets/images/professor/profesor-icon.png') }}" alt=""></div>
        <div class="container">
            <div class="heading">
                <h5>Skilled Introduce <div class="sub-heading-bg"><img src="{{ url('assets/website/assets/images/heading/heading-bg.png') }}"
                            alt=""></div>
                    <h2>Our most experience professor</h2>
                    <p>Experience seamless functionality with a range of cross-platform features and an intuitive yet
                        powerful interface in our comprehensive campus management solutions for educational
                        institutions.</p>
            </div>
            <div class="professor-slider">
                <div class="professor-slide">
                    <a href="#">
                        <div class="professor-team">
                            <div class="professor-team-img">
                                <img src="{{ url('assets/website/assets/images/professor/professor1.png') }}" alt="">
                            </div>
                            <div class="professor-team-text">
                                <h4>Willie Upshaw</h4>
                                <p>Department: <span>Biology</span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="professor-slide">
                    <a href="#">
                        <div class="professor-team">
                            <div class="professor-team-img">
                                <img src="{{ url('assets/website/assets/images/professor/professor2.png') }}" alt="">
                            </div>
                            <div class="professor-team-text">
                                <h4>Faye Jackson</h4>
                                <p>Department: <span>Math</span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="professor-slide">
                    <a href="#">
                        <div class="professor-team">
                            <div class="professor-team-img">
                                <img src="{{ url('assets/website/assets/images/professor/professor3.png') }}" alt="">
                            </div>
                            <div class="professor-team-text">
                                <h4>Faye Jackson</h4>
                                <p>Department: <span>Math</span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="professor-slide">
                    <a href="#">
                        <div class="professor-team">
                            <div class="professor-team-img">
                                <img src="{{ url('assets/website/assets/images/professor/professor4.png') }}" alt="">
                            </div>
                            <div class="professor-team-text">
                                <h4>Faye Jackson</h4>
                                <p>Department: <span>Math</span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="professor-slide">
                    <a href="#">
                        <div class="professor-team">
                            <div class="professor-team-img">
                                <img src="{{ url('assets/website/assets/images/professor/professor1.png') }}" alt="">
                            </div>
                            <div class="professor-team-text">
                                <h4>Willie Upshaw</h4>
                                <p>Department: <span>Biology</span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="professor-slide">
                    <a href="#">
                        <div class="introduce-team">
                            <div class="introduce-team-img">
                                <img src="{{ url('assets/website/assets/images/professor/professor2.png') }}" alt="">
                            </div>
                            <div class="introduce-team-text">
                                <h4>Faye Jackson</h4>
                                <p>Department: <span>Math</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="btn-main">
                <a href="#" class="master-btn">
                    <button class=" d-flex align-items-center justify-content-center">Discover More
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M16.5 7.33325L20.1667 10.9999L16.5 14.6666" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.8335 11H20.1668" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="campus mb">
        <div class="container d-flex align-items-center ">
            <div class="campus-img"><img src="{{ url('assets/website/assets/images/campus/campus.png') }}" alt=""></div>
            <div class="campus-text">
                <div class="campus-heading">
                    <h5>Our campus information</h5>
                    <h2>We are proud that more than <span>50 students</span> from different nationalities study on our
                        campus</h2>
                    <p>Experience seamless functionality with a range of cross-platform features and an intuitive yet
                        powerful interface in our comprehensive campus.</p>
                </div>
                <div class="campus-sub-btn">
                    <a href="#" class="d-flex align-items-center ">
                        Contact Us
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="move-right">
                                <path id="Vector" d="M16.5 7.33334L20.1667 11L16.5 14.6667" stroke="#6952E1"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Vector_2" d="M1.8335 11H20.1668" stroke="#6952E1" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="parents-testimonial">
        <div class="container">
            <div class="heading">
                <h2>What our parents says</h2>
                <p>Our clients send us bunch of smilies with our services and we love them</p>
            </div>
            <div class="parents-testimonial-slider">
                <div class="parents-testimonial-slide">
                    <a href="#">
                        <div class="parents-testimonial-img">
                            <img src="{{ url('assets/website/assets/images/parents-testimonial/parents-testimonial1.png') }}" alt="">
                        </div>
                        <div class="parents-testimonial-text">
                            <h3>Mr & Miss. Collins</h3>
                            <div class="cut">
                                <svg width="28" height="24" viewBox="0 0 28 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0992 -0.0100023V4.17C24.8992 4.53666 23.3592 5.30666 22.4792 6.48C21.5992 7.65333 21.1592 9.74333 21.1592 12.75H26.7692V23.2H15.9892V14.4C15.9892 9.85333 16.8326 6.33333 18.5192 3.83999C20.2059 1.27333 23.0659 -0.0100023 27.0992 -0.0100023ZM11.2592 -0.0100023V4.17C9.05922 4.53666 7.51922 5.30666 6.63922 6.48C5.75922 7.65333 5.31922 9.74333 5.31922 12.75H10.9292V23.2H0.149219V14.4C0.149219 9.85333 0.992552 6.33333 2.67922 3.83999C4.36589 1.27333 7.22589 -0.0100023 11.2592 -0.0100023Z"
                                        fill="#EDE4FF" />
                                </svg>
                            </div>
                            <p>Unicampus Management System stands out for its exceptional combination of user-friendly
                                design and robust features, providing educational...</p>
                            <a href="#">
                                <span class="d-flex align-items-center ">Discover More
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 6L16.5 9L13.5 12" stroke="#3D3D3D" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.5 9H16.5" stroke="#3D3D3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="parents-testimonial-slide">
                    <a href="#">
                        <div class="parents-testimonial-img">
                            <img src="{{ url('assets/website/assets/images/parents-testimonial/parents-testimonial2.png') }}" alt="">
                        </div>
                        <div class="parents-testimonial-text">
                            <h3>Mr. William Jones</h3>
                            <div class="cut">
                                <svg width="28" height="24" viewBox="0 0 28 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0992 -0.0100023V4.17C24.8992 4.53666 23.3592 5.30666 22.4792 6.48C21.5992 7.65333 21.1592 9.74333 21.1592 12.75H26.7692V23.2H15.9892V14.4C15.9892 9.85333 16.8326 6.33333 18.5192 3.83999C20.2059 1.27333 23.0659 -0.0100023 27.0992 -0.0100023ZM11.2592 -0.0100023V4.17C9.05922 4.53666 7.51922 5.30666 6.63922 6.48C5.75922 7.65333 5.31922 9.74333 5.31922 12.75H10.9292V23.2H0.149219V14.4C0.149219 9.85333 0.992552 6.33333 2.67922 3.83999C4.36589 1.27333 7.22589 -0.0100023 11.2592 -0.0100023Z"
                                        fill="#EDE4FF" />
                                </svg>
                            </div>
                            <p>Unicampus Management System stands out for its exceptional combination of user-friendly
                                design and robust features, providing educational...</p>
                            <a href="#">
                                <span class="d-flex align-items-center ">Discover More
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 6L16.5 9L13.5 12" stroke="#3D3D3D" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.5 9H16.5" stroke="#3D3D3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="parents-testimonial-slide">
                    <a href="#">
                        <div class="parents-testimonial-img">
                            <img src="{{ url('assets/website/assets/images/parents-testimonial/parents-testimonial3.png') }}" alt="">
                        </div>
                        <div class="parents-testimonial-text">
                            <h3>Mr & Miss. Herrick</h3>
                            <div class="cut">
                                <svg width="28" height="24" viewBox="0 0 28 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0992 -0.0100023V4.17C24.8992 4.53666 23.3592 5.30666 22.4792 6.48C21.5992 7.65333 21.1592 9.74333 21.1592 12.75H26.7692V23.2H15.9892V14.4C15.9892 9.85333 16.8326 6.33333 18.5192 3.83999C20.2059 1.27333 23.0659 -0.0100023 27.0992 -0.0100023ZM11.2592 -0.0100023V4.17C9.05922 4.53666 7.51922 5.30666 6.63922 6.48C5.75922 7.65333 5.31922 9.74333 5.31922 12.75H10.9292V23.2H0.149219V14.4C0.149219 9.85333 0.992552 6.33333 2.67922 3.83999C4.36589 1.27333 7.22589 -0.0100023 11.2592 -0.0100023Z"
                                        fill="#EDE4FF" />
                                </svg>
                            </div>
                            <p>Unicampus Management System stands out for its exceptional combination of user-friendly
                                design and robust features, providing educational...</p>
                            <a href="#">
                                <span class="d-flex align-items-center ">Discover More
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 6L16.5 9L13.5 12" stroke="#3D3D3D" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.5 9H16.5" stroke="#3D3D3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="parents-testimonial-slide">
                    <a href="#">
                        <div class="parents-testimonial-img">
                            <img src="{{ url('assets/website/assets/images/parents-testimonial/parents-testimonial1.png') }}" alt="">
                        </div>
                        <div class="parents-testimonial-text">
                            <h3>Mr & Miss. Collins</h3>
                            <div class="cut">
                                <svg width="28" height="24" viewBox="0 0 28 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0992 -0.0100023V4.17C24.8992 4.53666 23.3592 5.30666 22.4792 6.48C21.5992 7.65333 21.1592 9.74333 21.1592 12.75H26.7692V23.2H15.9892V14.4C15.9892 9.85333 16.8326 6.33333 18.5192 3.83999C20.2059 1.27333 23.0659 -0.0100023 27.0992 -0.0100023ZM11.2592 -0.0100023V4.17C9.05922 4.53666 7.51922 5.30666 6.63922 6.48C5.75922 7.65333 5.31922 9.74333 5.31922 12.75H10.9292V23.2H0.149219V14.4C0.149219 9.85333 0.992552 6.33333 2.67922 3.83999C4.36589 1.27333 7.22589 -0.0100023 11.2592 -0.0100023Z"
                                        fill="#EDE4FF" />
                                </svg>
                            </div>
                            <p>Unicampus Management System stands out for its exceptional combination of user-friendly
                                design and robust features, providing educational...</p>
                            <a href="#">
                                <span class="d-flex align-items-center ">Discover More
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 6L16.5 9L13.5 12" stroke="#3D3D3D" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.5 9H16.5" stroke="#3D3D3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="parents-testimonial-slide">
                    <a href="#">
                        <div class="parents-testimonial-img">
                            <img src="assets/website/assets/images/parents-testimonial/parents-testimonial2.png" alt="">
                        </div>
                        <div class="parents-testimonial-text">
                            <h3>Mr. William Jones</h3>
                            <div class="cut">
                                <svg width="28" height="24" viewBox="0 0 28 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0992 -0.0100023V4.17C24.8992 4.53666 23.3592 5.30666 22.4792 6.48C21.5992 7.65333 21.1592 9.74333 21.1592 12.75H26.7692V23.2H15.9892V14.4C15.9892 9.85333 16.8326 6.33333 18.5192 3.83999C20.2059 1.27333 23.0659 -0.0100023 27.0992 -0.0100023ZM11.2592 -0.0100023V4.17C9.05922 4.53666 7.51922 5.30666 6.63922 6.48C5.75922 7.65333 5.31922 9.74333 5.31922 12.75H10.9292V23.2H0.149219V14.4C0.149219 9.85333 0.992552 6.33333 2.67922 3.83999C4.36589 1.27333 7.22589 -0.0100023 11.2592 -0.0100023Z"
                                        fill="#EDE4FF" />
                                </svg>
                            </div>
                            <p>Unicampus Management System stands out for its exceptional combination of user-friendly
                                design and robust features, providing educational...</p>
                            <a href="#">
                                <span class="d-flex align-items-center ">Discover More
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 6L16.5 9L13.5 12" stroke="#3D3D3D" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.5 9H16.5" stroke="#3D3D3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="parents-testimonial-slide">
                    <a href="#">
                        <div class="parents-testimonial-img">
                            <img src="{{ url('assets/website/assets/images/parents-testimonial/parents-testimonial3.png') }}" alt="">
                        </div>
                        <div class="parents-testimonial-text">
                            <h3>Mr & Miss. Herrick</h3>
                            <div class="cut">
                                <svg width="28" height="24" viewBox="0 0 28 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0992 -0.0100023V4.17C24.8992 4.53666 23.3592 5.30666 22.4792 6.48C21.5992 7.65333 21.1592 9.74333 21.1592 12.75H26.7692V23.2H15.9892V14.4C15.9892 9.85333 16.8326 6.33333 18.5192 3.83999C20.2059 1.27333 23.0659 -0.0100023 27.0992 -0.0100023ZM11.2592 -0.0100023V4.17C9.05922 4.53666 7.51922 5.30666 6.63922 6.48C5.75922 7.65333 5.31922 9.74333 5.31922 12.75H10.9292V23.2H0.149219V14.4C0.149219 9.85333 0.992552 6.33333 2.67922 3.83999C4.36589 1.27333 7.22589 -0.0100023 11.2592 -0.0100023Z"
                                        fill="#EDE4FF" />
                                </svg>
                            </div>
                            <p>Unicampus Management System stands out for its exceptional combination of user-friendly
                                design and robust features, providing educational...</p>
                            <a href="#">
                                <span class="d-flex align-items-center ">Discover More
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 6L16.5 9L13.5 12" stroke="#3D3D3D" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.5 9H16.5" stroke="#3D3D3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe about-subscribe mb">
        <div class="container">
            <div class="subscribe-des"><img src="{{ url('assets/website/assets/images/subscribe/subscribe-des.png') }}" alt=""></div>
            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <div class="subscribe-text">
                        <h3>Subscribe to get latest news</h3>
                        <p>Unicampus Management System stands out for its exceptional combination of user-friendly
                            design and robust features.</p>
                        <div class="subscribe-form">
                            <form action="">
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
                                <div class="btn-main">
                                    <a href="#" class="master-btn">
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
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-img">
                        <div class="subscribe-img-main">
                            <img src="{{ url('assets/website/assets/images/subscribe/subscribe-main.png') }}" alt="">
                            <div class="subscribe-img-sub">
                                <img src="{{ url('assets/website/assets/images/subscribe/subscribe-sub.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
