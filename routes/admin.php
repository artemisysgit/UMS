<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\AdminuserController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AssignTeacherController;
use App\Http\Controllers\Admin\HodController;
use App\Http\Controllers\Admin\RoutineController;
use App\Http\Controllers\Admin\TimeController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\BenefitController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//--------------------------------------Admin Routes--------------------------------//
Route::get('admin',[AdminController::class,'login_form'])->name('login.form');
Route::post('login-functionality',[AdminController::class,'login_functionality'])->name('login.functionality');

Route::group(['middleware'=>'admin'],function(){

    Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

    //-----------------------------Course---------------------------------------//
    Route::get('admin/courses', [CourseController::class,'index'])->name('courses');
    Route::get('admin/courses/add-course', [CourseController::class,'create'])->name('addCourse');
    Route::post('admin/courses/save-course', [CourseController::class,'store'])->name('saveCourse');
    Route::get('admin/courses/edit/{id}', [CourseController::class,'edit'])->name('editCourse');
    Route::put('admin/courses/update/{id}', [CourseController::class,'update'])->name('updateCourse');
    //------------------------------------End------------------------------------------//

    //-------------------------------------Session---------------------------------------//
    Route::get('admin/sessions', [SessionController::class,'index'])->name('sessions');
    Route::get('admin/sessions/add-session', [SessionController::class,'create'])->name('addSession');
    Route::post('admin/sessions/save-session', [SessionController::class,'store'])->name('saveSession');
    Route::get('admin/sessions/edit/{id}', [SessionController::class,'edit'])->name('editSession');
    Route::put('admin/sessions/update/{id}', [SessionController::class,'update'])->name('updateSession');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Session---------------------------------------//
    Route::get('admin/semesters', [SemesterController::class,'index'])->name('semesters');
    Route::get('admin/semesters/add-semester', [SemesterController::class,'create'])->name('addSemester');
    Route::post('admin/semesters/save-semester', [SemesterController::class,'store'])->name('saveSemester');
    Route::get('admin/semesters/edit/{id}', [SemesterController::class,'edit'])->name('editSemester');
    Route::put('admin/semesters/update/{id}', [SemesterController::class,'update'])->name('updateSemester');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Departments---------------------------------------//
    Route::get('admin/departments', [DepartmentController::class,'index'])->name('departments');
    Route::get('admin/departments/add-department', [DepartmentController::class,'create'])->name('addDepartment');
    Route::post('admin/departments/save-department', [DepartmentController::class,'store'])->name('saveDepartment');
    Route::get('admin/departments/edit/{id}', [DepartmentController::class,'edit'])->name('editDepartment');
    Route::put('admin/departments/update/{id}', [DepartmentController::class,'update'])->name('updateDepartment');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Roles---------------------------------------//
    Route::get('admin/roles', [RoleController::class,'index'])->name('roles');
    Route::get('admin/roles/add-role', [RoleController::class,'create'])->name('addRole');
    Route::post('admin/roles/save-role', [RoleController::class,'store'])->name('saveRole');
    Route::get('admin/roles/edit/{id}', [RoleController::class,'edit'])->name('editRole');
    Route::put('admin/roles/update/{id}', [RoleController::class,'update'])->name('updateRole');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Subjects---------------------------------------//
    Route::get('admin/subjects', [SubjectController::class,'index'])->name('subjects');
    Route::get('admin/subjects/add-subject', [SubjectController::class,'create'])->name('addSubject');
    Route::post('admin/subjects/save-subject', [SubjectController::class,'store'])->name('saveSubject');
    Route::get('admin/subjects/edit/{id}', [SubjectController::class,'edit'])->name('editSubject');
    Route::put('admin/subjects/update/{id}', [SubjectController::class,'update'])->name('updateSubject');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Admin Users---------------------------------------//
    Route::get('admin/admins', [AdminuserController::class,'index'])->name('admins');
    Route::get('admin/admins/add-admin', [AdminuserController::class,'create'])->name('addAdmin');
    Route::post('admin/admins/save-admin', [AdminuserController::class,'store'])->name('saveAdmin');
    Route::get('admin/admins/edit/{id}', [AdminuserController::class,'edit'])->name('editAdmin');
    Route::put('admin/admins/update/{id}', [AdminuserController::class,'update'])->name('updateAdmin');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Faculty Users---------------------------------------//
    Route::get('admin/faculties', [FacultyController::class,'index'])->name('faculties');
    Route::get('admin/faculties/add-faculty', [FacultyController::class,'create'])->name('addFaculty');
    Route::post('admin/faculties/save-faculty', [FacultyController::class,'store'])->name('saveFaculty');
    Route::get('admin/faculties/edit/{id}', [FacultyController::class,'edit'])->name('editFaculty');
    Route::put('admin/faculties/update/{id}', [FacultyController::class,'update'])->name('updateFaculty');
    //--------------------------------------End------------------------------------------//

    //--------------------------------Profile-----------------------------------------//
    Route::get('admin/profile', [ProfileController::class,'index'])->name('profile');
    Route::post('admin/account/save-profile', [ProfileController::class,'store'])->name('saveProfile');
    Route::post('admin/account/upload-image', [ProfileController::class,'uploadImage'])->name('uploadProfile');
    //---------------------------------End--------------------------------------------//

    //-------------------------------------Assign Teacher---------------------------------------//
    Route::get('admin/assign-teachers', [AssignTeacherController::class,'index'])->name('assignList');
    Route::get('admin/assign-teachers/add', [AssignTeacherController::class,'create'])->name('add');
    Route::post('admin/assign-teachers/save', [AssignTeacherController::class,'store'])->name('save');
    Route::get('admin/assign-teachers/edit/{id}', [AssignTeacherController::class,'edit'])->name('edit');
    Route::put('admin/assign-teachers/update/{id}', [AssignTeacherController::class,'update'])->name('update');
    Route::post('admin/assign-teachers/ajax-add-item', [AssignTeacherController::class,'add_line_items'])->name('addRow');
    Route::post('admin/assign-teachers/ajax-delete-item', [AssignTeacherController::class,'del_line_item'])->name('delRow');
    //--------------------------------------End------------------------------------------//

    //-------------------------------HOD Master---------------------------------//
    Route::get('admin/hod', [HodController::class,'index'])->name('hodList');
    Route::get('admin/hod/add', [HodController::class,'create'])->name('addHod');
    Route::post('admin/hod/save', [HodController::class,'store'])->name('saveHod');
    Route::get('admin/hod/edit/{id}', [HodController::class,'edit'])->name('editHod');
    Route::put('admin/hod/update/{id}', [HodController::class,'update'])->name('updateHod');
    //-------------------------------------End--------------------------------------------//

    //-------------------------------Time Master---------------------------------//
    Route::get('admin/time', [TimeController::class,'index'])->name('timeList');
    Route::get('admin/time/add', [TimeController::class,'create'])->name('addTime');
    Route::post('admin/time/save', [TimeController::class,'store'])->name('saveTime');
    Route::get('admin/time/edit/{id}', [TimeController::class,'edit'])->name('editTime');
    Route::put('admin/time/update/{id}', [TimeController::class,'update'])->name('updateTime');
    //-------------------------------------End--------------------------------------------//

    //-------------------------------Routine Creation---------------------------------//
    Route::get('admin/routine', [RoutineController::class,'index'])->name('routineList');
    Route::get('admin/routine/add', [RoutineController::class,'create'])->name('addRoutine');
    Route::post('admin/routine/save', [RoutineController::class,'store'])->name('saveRoutine');
    Route::get('admin/routine/edit/{id}', [RoutineController::class,'edit'])->name('editRoutine');
    Route::put('admin/routine/update/{id}', [RoutineController::class,'update'])->name('updateRoutine');
    Route::post('admin/routine/ajax-search-routine', [RoutineController::class,'search_routine']);
    //-------------------------------------End--------------------------------------------//

    //-------------------------------------CMS Pages---------------------------------------//
    Route::get('admin/cms', [CmsController::class,'index'])->name('pages');
    Route::get('admin/cms/add-page', [CmsController::class,'create'])->name('addPage');
    Route::post('admin/cms/save-page', [CmsController::class,'store'])->name('savePage');
    Route::get('admin/cms/edit/{id}', [CmsController::class,'edit'])->name('editPage');
    Route::put('admin/cms/update/{id}', [CmsController::class,'update'])->name('updatePage');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Benefits---------------------------------------//
    Route::get('admin/benefits', [BenefitController::class,'index'])->name('benefits');
    Route::get('admin/benefits/add-benefit', [BenefitController::class,'create'])->name('addBenefit');
    Route::post('admin/benefits/save-benefit', [BenefitController::class,'store'])->name('saveBenefit');
    Route::get('admin/benefits/edit/{id}', [BenefitController::class,'edit'])->name('editBenefit');
    Route::put('admin/benefits/update/{id}', [BenefitController::class,'update'])->name('updateBenefit');
    //--------------------------------------End------------------------------------------//

});
