<?php
    //echo Route::currentRouteAction();die;

    $routeArray = app('request')->route()->getAction();
    $controllerAction = class_basename($routeArray['controller']);
    $controllerArr = explode('@', $controllerAction);
    $controller =  $controllerArr[0];

    //echo (int)request()->is('admin/courses');die;
   // echo $controller;die;

   $segment = request()->segment(1) ;

if($segment == 'college')
{

?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

      <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ $title }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/demo.css') }}" />

    <?php if($controller == 'AdminController'){?>
        @include('college.admin.header');
    <?php }?>

    <?php if($controller == 'AdminuserController'){?>
        @include('college.admin.users.admin.includes.header');
    <?php }?>

    <?php if($controller == 'CourseController'){?>
        @include('college.admin.course.includes.header');
    <?php }?>

    <?php if($controller == 'SessionController'){?>
        @include('admin.session.includes.header');
    <?php }?>

    <?php if($controller == 'SemesterController'){?>
        @include('college.admin.semester.includes.header');
    <?php }?>

    <?php if($controller == 'DepartmentController'){?>
        @include('college.admin.department.includes.header');
    <?php }?>

    <?php if($controller == 'RoleController'){?>
        @include('admin.role.includes.header');
    <?php }?>

    <?php if($controller == 'SubjectController'){?>
        @include('college.admin.subject.includes.header');
    <?php }?>

    <?php if($controller == 'SubjectCombinationController'){?>
        @include('college.admin.subject_combination.includes.header');
    <?php }?>

    <?php if($controller == 'FacultyController'){?>
        @include('college.admin.users.normal.includes.header');
    <?php }?>

    <?php if($controller == 'ProfileController'){?>
        @include('college.admin.profile.includes.header');
    <?php }?>

    <?php if($controller == 'AssignTeacherController'){?>
        @include('college.admin.assignment.teachers.includes.header');
    <?php }?>

    <?php if($controller == 'HodController'){?>
        @include('college.admin.hod.includes.header');
    <?php }?>

    <?php if($controller == 'TimeController'){?>
        @include('college.admin.time.includes.header');
    <?php }?>

    <?php if($controller == 'RoutineController'){?>
        @include('college.admin.routine.includes.header');
    <?php }?>

    <?php if($controller == 'CmsController'){?>
        @include('college.admin.cms.includes.header');
    <?php }?>

    <?php if($controller == 'BenefitController'){?>
        @include('college.admin.benefit.includes.header');
    <?php }?>

    <?php

    $college_admin_menu_active = '';
    if(activeMenu('college/admin/dashboard') || activeMenu('college/admin/courses') || activeMenu('college/admin/sessions') || activeMenu('college/admin/semesters')
    || activeMenu('college/admin/departments') || activeMenu('college/admin/roles') || activeMenu('college/admin/subjects')
    || activeMenu('college/admin/admins') || activeMenu('college/admin/faculties') || activeMenu('college/admin/assign-teachers') || activeMenu('college/admin/hod')
    || activeMenu('college/admin/time')|| activeMenu('college/admin/routine') || activeMenu('college/admin/cms') || activeMenu('college/admin/benefits'))

    {
        $college_admin_menu_active = 'active open';
    }

    $college_master_menu_active = '';
    if(activeMenu('college/admin/dashboard') || activeMenu('college/admin/courses') || activeMenu('college/admin/sessions') || activeMenu('college/admin/semesters')
    || activeMenu('college/admin/departments') || activeMenu('college/admin/roles') || activeMenu('college/admin/subjects')
    || activeMenu('college/admin/admins') || activeMenu('college/admin/faculties'))

    {
        $college_master_menu_active = 'active open';
    }


    $college_user_menu_active = '';
    if(activeMenu('college/admin/admins') || activeMenu('college/admin/faculties'))
    {
        $college_user_menu_active = 'active open';
    }

    $college_academy_menu_active = '';

    if(activeMenu('college/admin/assign-teachers') || activeMenu('college/admin/hod') || activeMenu('college/admin/time') || activeMenu('college/admin/routine'))
    {
        $college_academy_menu_active = 'active open';
    }

    $college_cms_menu_active = '';

    if(activeMenu('college/admin/cms'))
    {
        $college_cms_menu_active = 'active open';
    }

    $college_benefit_menu_active = '';

    if(activeMenu('college/admin/benefits'))
    {
        $college_benefit_menu_active = 'active open';
    }


    ?>

    <!-- Helpers -->
    <script src="{{ url('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('assets/js/config.js') }}"></script>

    <script>
        var BASE_URL = '<?php echo url('');?>/';
    </script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold">Artemisys</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item {{ $college_admin_menu_active }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-primary rounded-pill ms-auto">5</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="index.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="dashboards-crm.html" class="menu-link">
                    <div data-i18n="CRM">CRM</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-dashboard.html" class="menu-link">
                    <div data-i18n="eCommerce">eCommerce</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-logistics-dashboard.html" class="menu-link">
                    <div data-i18n="Logistics">Logistics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-academy-dashboard.html" class="menu-link">
                    <div data-i18n="Academy">Academy</div>
                  </a>
                </li> -->
              </ul>
            </li>

            <!-- Admin---------->

            <li class="menu-item {{ $college_admin_menu_active }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                <div data-i18n="Admin">Admin</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ activeMenu('college/admin/dashboard') }}">
                  <a href="{{ route('college.admin.dashboard') }}" class="menu-link">
                    <div data-i18n="Dashboard">Dashboard</div>
                  </a>
                </li>

                @if(AUTH::guard('collegeadmin')->user()->is_admin == 1 && (int)AUTH::guard('collegeadmin')->user()->collegeID != 0)

                    <li class="menu-item {{ $college_master_menu_active }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Masters">Masters</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ activeMenu('college/admin/sessions') }}">
                            <a href="{{ route('college.admin.sessions') }}" class="menu-link">
                                <div data-i18n="Session List">Session List</div>
                            </a>
                            </li>
                            <li class="menu-item {{ activeMenu('college/admin/courses') }}">
                            <a href="{{ route('college.admin.courses') }}" class="menu-link">
                                <div data-i18n="Course List">Course List</div>
                            </a>
                            </li>
                            <li class="menu-item {{ (request()->routeIs('college.admin.semesters') || request()->routeIs('college.admin.addSemester') || request()->routeIs('college.admin.editSemester')) ? 'active' : '' }}">
                            <a href="{{ route('college.admin.semesters') }}" class="menu-link">
                                <div data-i18n="Semester List">Semester List</div>
                            </a>
                            </li>
                            <li class="menu-item {{ activeMenu('college/admin/departments') }}">
                            <a href="{{ route('college.admin.departments') }}" class="menu-link">
                                <div data-i18n="Department List">Department List</div>
                            </a>
                            <li class="menu-item {{ activeMenu('college/admin/roles') }}">
                            <a href="{{ route('college.admin.roles') }}" class="menu-link">
                                <div data-i18n="Role List">Role List</div>
                            </a>
                            </li>
                            <li class="menu-item {{ activeMenu('college/admin/subjects') }}">
                            <a href="{{ route('college.admin.subjects') }}" class="menu-link">
                                <div data-i18n="Subject List">Subject List</div>
                            </a>
                            </li>

                            <li class="menu-item {{ $college_user_menu_active }}">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Users">Users</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item {{ activeMenu('college/admin/admins') }}">
                                    <a href="{{ route('college.admin.admins') }}" class="menu-link">
                                        <div data-i18n="Admin List">Admin List</div>
                                    </a>
                                    </li>
                                    <li class="menu-item {{ activeMenu('college/admin/faculties') }}">
                                    <a href="{{ route('college.admin.faculties') }}" class="menu-link">
                                        <div data-i18n="Faculty List">Faculty List</div>
                                    </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!-- Academy menu start -->
                    <li class="menu-item {{ $college_academy_menu_active }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-book"></i>
                            <div data-i18n="Academy">Academy</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item {{ activeMenu('college/admin/assign-teachers') }}">
                                <a href="{{ route('college.admin.assignList') }}" class="menu-link">
                                    <div data-i18n="Assign Teacher">Assign Teacher</div>
                                </a>
                            </li>
                            <li class="menu-item {{ activeMenu('college/admin/hod') }}">
                                <a href="{{ route('college.admin.hodList') }}" class="menu-link">
                                    <div data-i18n="HOD List">HOD List</div>
                                </a>
                            </li>
                            <li class="menu-item {{ activeMenu('college/admin/time') }}">
                                <a href="{{ route('college.admin.timeList') }}" class="menu-link">
                                    <div data-i18n="Time List">Time List</div>
                                </a>
                            </li>
                            <li class="menu-item {{ activeMenu('college/admin/routine') }}">
                                <a href="{{ route('college.admin.routineList') }}" class="menu-link">
                                    <div data-i18n="Routine List">Routine List</div>
                                </a>
                            </li>
                        </ul>
                    </li>
            <!-- Academy menu end -->

            <li class="menu-item {{ $college_benefit_menu_active }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-book"></i>
                    <div data-i18n="Benefits">Benefits</div>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item {{ activeMenu('college/admin/benefits') }}">
                        <a href="{{ route('college.admin.benefits') }}" class="menu-link">
                            <div data-i18n="Benefit List">Benefit List</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- CMS menu start -->
            <li class="menu-item {{ $college_cms_menu_active }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-book"></i>
                    <div data-i18n="Cms">CMS</div>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item {{ activeMenu('college/admin/cms') }}">
                        <a href="{{ route('college.admin.pages') }}" class="menu-link">
                            <div data-i18n="Page List">Page List</div>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- Academy menu end -->



                @endif


              </ul>
            </li>

            <!------------------End------------------------------------>




          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                    <i class="ti ti-search ti-md me-2"></i>
                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                  </a>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                        <span class="align-middle">English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                        <span class="align-middle">French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                        <span class="align-middle">Arabic</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                        <span class="align-middle">German</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="ti ti-layout-grid-add ti-md"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-shortcuts-add text-body"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Add shortcuts"
                          ><i class="ti ti-sm ti-apps"></i
                        ></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-calendar fs-4"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link">Calendar</a>
                          <small class="text-muted mb-0">Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-file-invoice fs-4"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                          <small class="text-muted mb-0">Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-users fs-4"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link">User App</a>
                          <small class="text-muted mb-0">Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-lock fs-4"></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                          <small class="text-muted mb-0">Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-chart-bar fs-4"></i>
                          </span>
                          <a href="index.html" class="stretched-link">Dashboard</a>
                          <small class="text-muted mb-0">User Profile</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-settings fs-4"></i>
                          </span>
                          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                          <small class="text-muted mb-0">Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-help fs-4"></i>
                          </span>
                          <a href="pages-faq.html" class="stretched-link">FAQs</a>
                          <small class="text-muted mb-0">FAQs & Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-square fs-4"></i>
                          </span>
                          <a href="modal-examples.html" class="stretched-link">Modals</a>
                          <small class="text-muted mb-0">Useful Popups</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="ti ti-bell ti-md"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-notifications-all text-body"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Mark all as read"
                          ><i class="ti ti-mail-opened fs-4"></i
                        ></a>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                              <p class="mb-0">Won the monthly best seller gold badge</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Charles Franklin</h6>
                              <p class="mb-0">Accepted your connection</p>
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/2.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New Message ✉️</h6>
                              <p class="mb-0">You have new message from Natalie</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-shopping-cart"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                              <p class="mb-0">ACME Inc. made new order $1,154</p>
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/9.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Application has been approved 🚀</h6>
                              <p class="mb-0">Your ABC project application has been approved.</p>
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-chart-pie"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Monthly report is generated</h6>
                              <p class="mb-0">July monthly financial report is generated</p>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Send connection request</h6>
                              <p class="mb-0">Peter sent you connection request</p>
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/6.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New message from Jane</h6>
                              <p class="mb-0">Your have new message from Jane</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="ti ti-alert-triangle"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">CPU is running high</h6>
                              <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top">
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <?php

                if(!empty(Auth::guard('collegeadmin')->user()->image))
                {
                    $profileImage = 'images/college/users/admins/'.Auth::guard('collegeadmin')->user()->image;
                }
                else
                {
                    $profileImage = 'assets/img/avatars/14.png';
                }


                ?>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ url($profileImage) }}" alt class="h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">{{ Auth::guard('collegeadmin')->user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('college.admin.profile') }}">
                        <i class="ti ti-user-check me-2 ti-sm"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="ti ti-settings me-2 ti-sm"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20"
                            >2</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="ti ti-help me-2 ti-sm"></i>
                        <span class="align-middle">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                        <span class="align-middle">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('college.admin.logout') }}" target="">
                        <i class="ti ti-logout me-2 ti-sm"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-------------------Main Content----------------------->

          <!-- Content wrapper -->
            <div class="content-wrapper">
             <!-- Content -->

                @yield('content')

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                    <div
                        class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                        <div>
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by <a href="https://artemisys.com" target="_blank" class="fw-medium">Artemisys</a>
                        </div>

                    </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
                </div>


            </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ url('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ url('assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <?php if($controller == 'AdminController'){?>
        @include('college.admin.footer');
    <?php }?>

    <?php if($controller == 'AdminuserController'){?>
        @include('college.admin.users.admin.includes.footer');
    <?php }?>

    <?php if($controller == 'CourseController'){?>
        @include('college.admin.course.includes.footer');
    <?php }?>

    <?php if($controller == 'SessionController'){?>
        @include('college.admin.session.includes.footer');
    <?php }?>

    <?php if($controller == 'SemesterController'){?>
        @include('college.admin.semester.includes.footer');
    <?php }?>

    <?php if($controller == 'DepartmentController'){?>
        @include('college.admin.department.includes.footer');
    <?php }?>

    <?php if($controller == 'RoleController'){?>
        @include('college.admin.role.includes.footer');
    <?php }?>

    <?php if($controller == 'SubjectController'){?>
        @include('college.admin.subject.includes.footer');
    <?php }?>

    <?php if($controller == 'SubjectCombinationController'){?>
        @include('college.admin.subject_combination.includes.footer');
    <?php }?>

    <?php if($controller == 'FacultyController'){?>
        @include('college.admin.users.normal.includes.footer');
    <?php }?>

    <?php if($controller == 'ProfileController'){?>
        @include('college.admin.profile.includes.footer');
    <?php }?>

    <?php if($controller == 'AssignTeacherController'){?>
        @include('college.admin.assignment.teachers.includes.footer');
    <?php }?>

    <?php if($controller == 'HodController'){?>
        @include('admin.hod.includes.footer');
    <?php }?>

    <?php if($controller == 'TimeController'){?>
        @include('college.admin.time.includes.footer');
    <?php }?>

    <?php if($controller == 'RoutineController'){?>
        @include('college.admin.routine.includes.footer');
    <?php }?>

    <?php if($controller == 'CmsController'){?>
        @include('college.admin.cms.includes.footer');
    <?php }?>

    <?php if($controller == 'BenefitController'){?>
        @include('college.admin.benefit.includes.footer');
    <?php }?>





  </body>

</html>

<?php }?>
