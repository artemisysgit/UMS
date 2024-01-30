<section class="courses py">
        <div class="courses4"><img src="<?php echo e(url('assets/website/assets/images/courses/courses4.png')); ?>" alt=""></div>
        <div class="container">
            <div class="heading">
                <h5>Top Popular Courses <div class="sub-heading-bg"><img src="<?php echo e(url('assets/website/assets/images/heading/heading-bg.png')); ?>"
                            alt=""></div>
                </h5>
                <h2>Explore our popular courses</h2>
                <p>Experience seamless functionality with a range of cross-platform features and an intuitive yet
                    powerful interface in our comprehensive campus management solutions for educational institutions.
                </p>
            </div>
            <div class="tab">

            <?php if(!empty($course_type)): ?>
                <?php $__currentLoopData = $course_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button class="tablinks <?php echo e($loop->iteration == 1?'active':''); ?>" onclick="openCity(event, '<?php echo e($k); ?>')"><?php echo e($v); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </div>

        <?php if(!empty($course_type)): ?>
            <?php $__currentLoopData = $course_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div id="<?php echo e($k); ?>" class="tabcontent" style="<?php echo e($loop->iteration == 1?'display: block;':''); ?>">
                <div class="courses-slider course_div">

                <?php if(!empty($course_data)): ?>

                    <?php $__currentLoopData = $course_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="courses-slide">
                        <div class="courses-slide-main">
                            <div class="courses-slider-img"><img src="/images/course/<?php echo e($course->image); ?>" alt=""></div>
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
                                <a href="#"><?php echo e($course->title); ?></a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>

                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="<?php echo e(url('assets/website/assets/js/course/custom.js' )); ?>"></script>

    <script>
        $(function(){

            resize_div_same_size('courses-slide-main');

        });
    </script>
<?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/website/cources/list.blade.php ENDPATH**/ ?>