<?php

    $routeArray = app('request')->route()->getAction();
    $controllerAction = class_basename($routeArray['controller']);
    $controllerArr = explode('@', $controllerAction);
    $controller =  $controllerArr[0];

    //echo (int)request()->is('admin/courses');die;
   // echo $controller;die;



   $home_menu_active = '';
   if(activeMenu('/'))
    {
        $home_menu_active = 'active';
    }

    $aboutus_menu_active = '';
   if(activeMenu('about-us'))
    {
        $aboutus_menu_active = 'active';
    }

?>
<header>
        <div class="container-fluid ">
            <div class="logo">
                <a href="/"><img src="{{ url('assets/website/assets/images/logo/logo.png') }}" alt=""></a>
            </div>
            <div class="navigation menu">
                <ul class="main-menu menu-toggle">
                    <li><a href="/" class="{{ $home_menu_active }} ">Home</a></li>
                    <li><a href="{{ route('about-us') }}" class="{{ $aboutus_menu_active }}">About</a></li>
                    <li class="dropdown "><a href="#">Product & Services <svg width="11" height="7" viewBox="0 0 11 7"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.75 1.625L5.5 5.375L9.25 1.625" stroke="#5A5A5A" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#">Product 1</a></li>
                            <li><a href="#">Product 2</a></li>
                            <li><a href="#">Product 3</a></li>
                            <!-- <div class="arrow"></div> -->
                        </ul>
                    </li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Clients</a></li>
                    <li class="dropdown "><a href="#">Resources <svg width="11" height="7" viewBox="0 0 11 7"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.75 1.625L5.5 5.375L9.25 1.625" stroke="#5A5A5A" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#">Resources 1</a></li>
                            <li><a href="#">Resources 2</a></li>
                            <li><a href="#">Resources 3</a></li>
                            <!-- <div class="arrow"></div> -->
                        </ul>
                    </li>
                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    <li class="login">

                    @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1B82D4" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                    stroke="#1B82D4" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7 20.662V19C7 18.4696 7.21071 17.9609 7.58579 17.5858C7.96086 17.2107 8.46957 17 9 17H15C15.5304 17 16.0391 17.2107 16.4142 17.5858C16.7893 17.9609 17 18.4696 17 19V20.662"
                                    stroke="#1B82D4" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Login
                        </a>
                        @else
                        <a href="{{ route('login') }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1B82D4" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                    stroke="#1B82D4" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7 20.662V19C7 18.4696 7.21071 17.9609 7.58579 17.5858C7.96086 17.2107 8.46957 17 9 17H15C15.5304 17 16.0391 17.2107 16.4142 17.5858C16.7893 17.9609 17 18.4696 17 19V20.662"
                                    stroke="#1B82D4" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Login
                        </a>
                        @endauth
                        @endif
                    </li>
                    <li class="registration">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 19.5V20C20 20.5304 19.7893 21.0391 19.4142 21.4142C19.0391 21.7893 18.5304 22 18 22H6C5.46957 22 4.96086 21.7893 4.58579 21.4142C4.21071 21.0391 4 20.5304 4 20V4C4 3.46957 4.21071 2.96086 4.58579 2.58579C4.96086 2.21071 5.46957 2 6 2H14.5L18 5.5"
                                    stroke="#F3970C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 18H9" stroke="#F3970C" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18.42 9.60998C18.615 9.41497 18.8465 9.26027 19.1013 9.15473C19.3561 9.04919 19.6292 8.99487 19.905 8.99487C20.1808 8.99487 20.4539 9.04919 20.7087 9.15473C20.9635 9.26027 21.195 9.41497 21.39 9.60998C21.585 9.80499 21.7397 10.0365 21.8452 10.2913C21.9508 10.5461 22.0051 10.8192 22.0051 11.095C22.0051 11.3708 21.9508 11.6439 21.8452 11.8987C21.7397 12.1535 21.585 12.385 21.39 12.58L16.95 17L13 18L13.99 14.05L18.42 9.60998Z"
                                    stroke="#F3970C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Free Registration
                        </a>
                    @endif

                    </li>
                </ul>
            </div>
            <div class="hamburger" id="hamburger-1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </header>
