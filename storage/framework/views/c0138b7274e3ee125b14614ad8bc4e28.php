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
    <link rel="stylesheet" href="<?php echo e(url('assets/website/assets/css/style.css')); ?>">

    <title><?php echo e($title); ?></title>
</head>

<body>

    <?php echo $__env->make('website.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="innere-banner contact-banner">
        <div class="container">
            <div class="innere-banner-text">
                <h1>Contact Us</h1>
                <p>From health care to education, policy to art, artificial intelligence <br> is rapidly changing our
                    world and our daily lives.</p>
                <span><a href="index2.html">Home <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                            viewBox="0 0 7 10" fill="none">
                            <path d="M1.75 8.25L5.25 4.75L1.75 1.25" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a></span>
                <span>Contact Us</span>
            </div>
        </div>
    </section>

    <section class="contact-message mb">
        <div class="container">
            <div class="message-form">
                <form action="">
                    <h3>Send us a quick message</h3>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Subject">
                    <textarea name="" id="" placeholder="Message"></textarea>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">
                            <p>Accept Terms & Conditions And Privacy Policy.</p>
                        </label>
                    </div>
                    <button type="submit" class="d-flex align-items-center ">Send Message
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M16.5 7.33325L20.1667 10.9999L16.5 14.6666" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.83301 11H20.1663" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="touch-form">
                <form action="">
                    <h3>Get in touch</h3>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <ul class="location-detail">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z"
                                    stroke="white" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Kebele 12, 454, Addis Ababa, Ethiopia</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <path
                                    d="M20.1663 15.51V18.26C20.1674 18.5153 20.1151 18.768 20.0128 19.0019C19.9105 19.2358 19.7605 19.4458 19.5724 19.6184C19.3843 19.791 19.1622 19.9224 18.9203 20.0042C18.6785 20.0859 18.4222 20.1163 18.168 20.0933C15.3473 19.7868 12.6377 18.823 10.2572 17.2792C8.04233 15.8718 6.16455 13.994 4.75715 11.7792C3.20797 9.38778 2.24388 6.66509 1.94299 3.83167C1.92008 3.57819 1.95021 3.3227 2.03145 3.0815C2.11269 2.84029 2.24326 2.61864 2.41486 2.43066C2.58645 2.24268 2.79531 2.09249 3.02813 1.98965C3.26095 1.88681 3.51263 1.83358 3.76715 1.83334H6.51715C6.96202 1.82896 7.3933 1.9865 7.7306 2.27658C8.06791 2.56666 8.28822 2.9695 8.35049 3.41001C8.46656 4.29007 8.68182 5.15417 8.99215 5.98584C9.11549 6.31394 9.14218 6.67051 9.06907 7.01331C8.99596 7.35612 8.82611 7.67078 8.57965 7.92001L7.41549 9.08417C8.72041 11.3791 10.6206 13.2792 12.9155 14.5842L14.0797 13.42C14.3289 13.1736 14.6435 13.0037 14.9863 12.9306C15.3291 12.8575 15.6857 12.8842 16.0138 13.0075C16.8455 13.3178 17.7096 13.5331 18.5897 13.6492C19.0349 13.712 19.4416 13.9363 19.7323 14.2794C20.023 14.6225 20.1775 15.0605 20.1663 15.51Z"
                                    stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12.8789 1.83325C14.7473 2.03012 16.4926 2.85882 17.826 4.18228C19.1595 5.50575 20.0013 7.24471 20.2122 9.11158"
                                    stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12.8789 5.5C13.7805 5.67778 14.6078 6.12244 15.2534 6.77628C15.8991 7.43013 16.3333 8.26295 16.4997 9.16667"
                                    stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> +251 11 5530216</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M20 4H4C2.89543 4 2 4.89543 2 6V18C2 19.1046 2.89543 20 4 20H20C21.1046 20 22 19.1046 22 18V6C22 4.89543 21.1046 4 20 4Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M22 7L13.03 12.7C12.7213 12.8934 12.3643 12.996 12 12.996C11.6357 12.996 11.2787 12.8934 10.97 12.7L2 7"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> support@unicampus.com
                        </li>
                    </ul>
                    <h4>Follow Us</h4>
                    <ul class="icon-detail">
                        <li><a href="#">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="facebook">
                                        <path id="Vector"
                                            d="M13.5 1.5H11.25C10.2554 1.5 9.30161 1.89509 8.59835 2.59835C7.89509 3.30161 7.5 4.25544 7.5 5.25V7.5H5.25V10.5H7.5V16.5H10.5V10.5H12.75L13.5 7.5H10.5V5.25C10.5 5.05109 10.579 4.86032 10.7197 4.71967C10.8603 4.57902 11.0511 4.5 11.25 4.5H13.5V1.5Z"
                                            stroke="#3D3D3D" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </a></li>
                        <li><a href="#">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.0390096 0L6.21643 8.2598L0 14.9754H1.39907L6.84154 9.09578L11.2389 14.9754H16L9.47501 6.25096L15.2612 0H13.8621L8.8499 5.41498L4.8001 0H0.0390096ZM2.09644 1.03056H4.2837L13.9422 13.9446H11.755L2.09644 1.03056Z"
                                        fill="#3D3D3D" />
                                </svg>
                            </a></li>
                        <li><a href="#">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="instagram" clip-path="url(#clip0_62_7443)">
                                        <path id="Vector"
                                            d="M12.75 1.5H5.25C3.17893 1.5 1.5 3.17893 1.5 5.25V12.75C1.5 14.8211 3.17893 16.5 5.25 16.5H12.75C14.8211 16.5 16.5 14.8211 16.5 12.75V5.25C16.5 3.17893 14.8211 1.5 12.75 1.5Z"
                                            stroke="#3D3D3D" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path id="Vector_2"
                                            d="M12 8.52748C12.0926 9.15167 11.9859 9.78914 11.6953 10.3492C11.4047 10.9093 10.9449 11.3635 10.3812 11.6472C9.81757 11.9309 9.17883 12.0297 8.55583 11.9294C7.93284 11.8292 7.35731 11.535 6.91112 11.0889C6.46493 10.6427 6.17079 10.0671 6.07054 9.44414C5.9703 8.82115 6.06904 8.1824 6.35274 7.61876C6.63643 7.05512 7.09063 6.59529 7.65073 6.30466C8.21083 6.01404 8.84831 5.90742 9.47249 5.99998C10.1092 6.0944 10.6986 6.39108 11.1538 6.84621C11.6089 7.30134 11.9056 7.89079 12 8.52748Z"
                                            stroke="#3D3D3D" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path id="Vector_3" d="M13.125 4.875H13.1308" stroke="#3D3D3D"
                                            stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_62_7443">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a></li>
                        <li><a href="#">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 6C13.1935 6 14.3381 6.47411 15.182 7.31802C16.0259 8.16193 16.5 9.30653 16.5 10.5V15.75H13.5V10.5C13.5 10.1022 13.342 9.72064 13.0607 9.43934C12.7794 9.15804 12.3978 9 12 9C11.6022 9 11.2206 9.15804 10.9393 9.43934C10.658 9.72064 10.5 10.1022 10.5 10.5V15.75H7.5V10.5C7.5 9.30653 7.97411 8.16193 8.81802 7.31802C9.66193 6.47411 10.8065 6 12 6Z"
                                        stroke="#3D3D3D" stroke-width="1.3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M4.5 6.75H1.5V15.75H4.5V6.75Z" stroke="#3D3D3D" stroke-width="1.3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M3 4.5C3.82843 4.5 4.5 3.82843 4.5 3C4.5 2.17157 3.82843 1.5 3 1.5C2.17157 1.5 1.5 2.17157 1.5 3C1.5 3.82843 2.17157 4.5 3 4.5Z"
                                        stroke="#3D3D3D" stroke-width="1.3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a></li>
                        <li><a href="#">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="youtube">
                                        <path id="Vector"
                                            d="M1.87501 12.75C1.35107 10.2774 1.35107 7.72255 1.87501 5.25C1.94385 4.99891 2.07686 4.77006 2.26096 4.58595C2.44506 4.40185 2.67391 4.26884 2.92501 4.2C6.94759 3.53359 11.0524 3.53359 15.075 4.2C15.3261 4.26884 15.5549 4.40185 15.7391 4.58595C15.9232 4.77006 16.0562 4.99891 16.125 5.25C16.6489 7.72255 16.6489 10.2774 16.125 12.75C16.0562 13.0011 15.9232 13.2299 15.7391 13.414C15.5549 13.5981 15.3261 13.7312 15.075 13.8C11.0524 14.4665 6.94758 14.4665 2.92501 13.8C2.67391 13.7312 2.44506 13.5981 2.26096 13.414C2.07686 13.2299 1.94385 13.0011 1.87501 12.75Z"
                                            stroke="#3D3D3D" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path id="Vector_2" d="M7.5 11.25L11.25 9L7.5 6.75V11.25Z" stroke="#3D3D3D"
                                            stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </a></li>
                    </ul>
                </form>
                <div class="tuch-icon"><img src="<?php echo e(url('assets/website/assets/images/contact-form/tuch-icon.png')); ?>" alt=""></div>
            </div>
        </div>
    </section>

    <section>
        <div class="map">
            <iframe src="https://www.google.com/maps/d/embed?mid=1vZwMmq2EDveUU6w--7mvPx27HhU&hl=en_US&ehbc=2E312F" width="100%" height="100%" frameBorder="0"></iframe>
        </div>
    </section>

    <?php echo $__env->make('website.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <button class="scrollToTop">
        <span id="progress-bar">
            <svg width="48" height="48" viewBox="-5 -5 60 60" fill="none">
                <path stroke="#824AE1" stroke-width="2" d="M0.5,25a24.5,24.5 0 1,0 49,0a24.5,24.5 0 1,0 -49,0"></path>
            </svg>
        </span>
        <div class="scrollToTop-icon"><img src="<?php echo e(url('assets/website/assets/images/scroll/arrow-down-left.png')); ?>" alt=""></div>
    </button>









    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="<?php echo e(url('assets/website/assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/contact_us.blade.php ENDPATH**/ ?>