<?php $__env->startSection('content'); ?>


<!-- Content -->


    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Academy/</span> My Courses</h4>

    <div class="app-academy">
        <div class="card p-0 mb-4">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                <div class="app-academy-md-25 card-body py-0">
                    <img src="../../assets/img/illustrations/bulb-light.png"
                        class="img-fluid app-academy-img-height scaleX-n1-rtl" alt="Bulb in hand"
                        data-app-light-img="illustrations/bulb-light.png"
                        data-app-dark-img="illustrations/bulb-dark.png" height="90" />
                </div>
                <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                    <h3 class="card-title mb-4 lh-sm px-md-5 lh-lg">
                        Education, talents, and career opportunities.
                        <span class="text-primary fw-medium text-nowrap">All in one place</span>.
                    </h3>
                    <p class="mb-3">
                        Grow your skill with the most reliable online courses and certifications in marketing,
                        information technology, programming, and data science.
                    </p>
                    <div class="d-flex align-items-center justify-content-between app-academy-md-80">
                        <input type="search" placeholder="Find your course" class="form-control me-2" />
                        <button type="submit" class="btn btn-primary btn-icon"><i class="ti ti-search"></i></button>
                    </div>
                </div>
                <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
                    <img src="../../assets/img/illustrations/pencil-rocket.png" alt="pencil rocket" height="188"
                        class="scaleX-n1-rtl" />
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex flex-wrap justify-content-between gap-3">
                <div class="card-title mb-0 me-1">
                    <h5 class="mb-1">My Courses</h5>
                    <p class="text-muted mb-0">Total 6 course you have purchased</p>
                </div>
                <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
                    <select id="select2_course_select" class="select2 form-select" data-placeholder="All Courses">
                        <option value="">All Courses</option>
                        <option value="ui/ux">UI/UX</option>
                        <option value="seo">SEO</option>
                        <option value="web">Web</option>
                        <option value="music">Music</option>
                        <option value="painting">Painting</option>
                    </select>

                    <label class="switch">
                        <input type="checkbox" class="switch-input" />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label text-nowrap mb-0">Hide completed</span>
                    </label>
                </div>
            </div>
            <div class="card-body">
                <div class="row gy-4 mb-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-3">
                                <a href="app-academy-course-details.html"><img class="img-fluid"
                                        src="../../assets/img/pages/app-academy-tutor-1.png" alt="tutor image 1" /></a>
                            </div>
                            <div class="card-body p-3 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-label-primary">Web</span>
                                    <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                        4.4 <span class="text-warning"><i
                                                class="ti ti-star-filled me-1 mt-n1"></i></span><span
                                            class="text-muted">(1.23k)</span>
                                    </h6>
                                </div>
                                <a href="app-academy-course-details.html" class="h5">Basics of Angular</a>
                                <p class="mt-2">Introductory course for Angular and framework basics in web development.
                                </p>
                                <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>30 minutes
                                </p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                                    <!-- <a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center"
                                        href="app-academy-course-details.html">
                                        <i
                                            class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl me-2 mt-n1 ti-sm"></i><span>Start
                                            Over</span>
                                    </a> -->
                                    <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center"
                                        href="app-academy-course-details.html">
                                        <span class="me-2">Details</span><i
                                            class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-3">
                                <a href="app-academy-course-details.html"><img class="img-fluid"
                                        src="../../assets/img/pages/app-academy-tutor-2.png" alt="tutor image 2" /></a>
                            </div>
                            <div class="card-body p-3 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3 pe-xl-3 pe-xxl-0">
                                    <span class="badge bg-label-danger">UI/UX</span>
                                    <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                        4.2 <span class="text-warning"><i
                                                class="ti ti-star-filled me-1 mt-n1"></i></span><span
                                            class="text-muted"> (424)</span>
                                    </h6>
                                </div>
                                <a class="h5" href="app-academy-course-details.html">Figma & More</a>
                                <p class="mt-2">Introductory course for design and framework basics in web development.
                                </p>
                                <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>16 hours</p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-25" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                    <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center"
                                        href="app-academy-course-details.html">
                                        <span class="me-2">Details</span><i
                                            class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-3">
                                <a href="app-academy-course-details.html"><img class="img-fluid"
                                        src="../../assets/img/pages/app-academy-tutor-3.png" alt="tutor image 3" /></a>
                            </div>
                            <div class="card-body p-3 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-label-success">SEO</span>
                                    <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                        5 <span class="text-warning"><i
                                                class="ti ti-star-filled me-1 mt-n1"></i></span><span
                                            class="text-muted"> (12)</span>
                                    </h6>
                                </div>
                                <a class="h5" href="app-academy-course-details.html">Keyword Research</a>
                                <p class="mt-2">Keyword suggestion tool provides comprehensive details & suggestions.
                                </p>
                                <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                    <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center"
                                        href="app-academy-course-details.html">
                                        <span class="me-2">Details</span><i
                                            class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-3">
                                <a href="app-academy-course-details.html"><img class="img-fluid"
                                        src="../../assets/img/pages/app-academy-tutor-4.png" alt="tutor image 4" /></a>
                            </div>
                            <div class="card-body p-3 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-label-info">Music</span>
                                    <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                        3.8 <span class="text-warning"><i
                                                class="ti ti-star-filled me-1 mt-n1"></i></span><span
                                            class="text-muted"> (634)</span>
                                    </h6>
                                </div>
                                <a class="h5" href="app-academy-course-details.html">Basics to Advanced</a>
                                <p class="mt-2">
                                    20 more lessons like this about music production, writing, mixing, mastering
                                </p>
                                <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>30 minutes
                                </p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                    <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center"
                                        href="app-academy-course-details.html">
                                        <span class="me-2">Details</span><i
                                            class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-3">
                                <a href="app-academy-course-details.html"><img class="img-fluid"
                                        src="../../assets/img/pages/app-academy-tutor-5.png" alt="tutor image 5" /></a>
                            </div>
                            <div class="card-body p-3 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-label-warning">Painting</span>
                                    <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                        4.7 <span class="text-warning"><i
                                                class="ti ti-star-filled me-1 mt-n1"></i></span><span
                                            class="text-muted"> (34)</span>
                                    </h6>
                                </div>
                                <a class="h5" href="app-academy-course-details.html">Art & Drawing</a>
                                <p class="mt-2">
                                    Easy-to-follow video & guides show you how to draw animals, people & more.
                                </p>
                                <p class="d-flex align-items-center text-success">
                                    <i class="ti ti-checks me-2 mt-n1"></i>Completed
                                </p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!-- <a class="w-100 btn btn-label-primary" href="app-academy-course-details.html"><i
                                        class="ti ti-rotate-clockwise-2 me-2 mt-n1 scaleX-n1-rtl"></i>Start Over</a> -->
                                    <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center"
                                    href="app-academy-course-details.html">
                                        <span class="me-2">Details</span><i
                                            class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-3">
                                <a href="app-academy-course-details.html"><img class="img-fluid"
                                        src="../../assets/img/pages/app-academy-tutor-6.png" alt="tutor image 6" /></a>
                            </div>
                            <div class="card-body p-3 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-label-danger">UI/UX</span>
                                    <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                        3.6 <span class="text-warning"><i
                                                class="ti ti-star-filled me-1 mt-n1"></i></span><span
                                            class="text-muted"> (2.5k)</span>
                                    </h6>
                                </div>
                                <a class="h5" href="app-academy-course-details.html">Basics Fundamentals</a>
                                <p class="mt-2">
                                    This guide will help you develop a systematic and programmatic approach user
                                    interface.
                                </p>
                                <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>16 hours</p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-25" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                    <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center"
                                        href="app-academy-course-details.html">
                                        <span class="me-2">Details</span><i
                                            class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
                    <ul class="pagination">
                        <li class="page-item prev">
                            <a class="page-link" href="javascript:void(0);"><i
                                    class="ti ti-chevron-left ti-xs scaleX-n1-rtl"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">5</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);"><i
                                    class="ti ti-chevron-right ti-xs scaleX-n1-rtl"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


    </div>


<!-- / Content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/frontend/course/courseList.blade.php ENDPATH**/ ?>