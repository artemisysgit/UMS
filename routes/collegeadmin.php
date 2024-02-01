<?php

use App\Http\Controllers\College\CollegeAdminController;
use App\Http\Controllers\College\Admin\AdminController;
use App\Http\Controllers\College\Admin\CourseController;
use App\Http\Controllers\College\Admin\SessionController;
use App\Http\Controllers\College\Admin\SemesterController;
use App\Http\Controllers\College\Admin\DepartmentController;
use App\Http\Controllers\College\Admin\RoleController;
use App\Http\Controllers\College\Admin\SubjectController;
use App\Http\Controllers\College\Admin\AdminuserController;
use App\Http\Controllers\College\Admin\FacultyController;
use App\Http\Controllers\College\Admin\ProfileController;
use App\Http\Controllers\College\Admin\AssignTeacherController;
use App\Http\Controllers\College\Admin\HodController;
use App\Http\Controllers\College\Admin\RoutineController;
use App\Http\Controllers\College\Admin\TimeController;
use App\Http\Controllers\College\Admin\CmsController;
use App\Http\Controllers\College\Admin\BenefitController;

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
Route::get('college/admin/',[AdminController::class,'login_form'])->name('collegelogin.form');
Route::post('college-login-functionality',[AdminController::class,'login_functionality'])->name('collegelogin.functionality');

Route::group(['middleware'=>'collegeadmin'],function(){

    Route::get('college/admin/logout',[AdminController::class,'logout'])->name('college.admin.logout');
    Route::get('college/admin/dashboard',[AdminController::class,'dashboard'])->name('college.admin.dashboard');

    //-----------------------------Course---------------------------------------//
    Route::get('college/admin/courses', [CourseController::class,'index'])->name('college.admin.courses');
    Route::get('college/admin/courses/add-course', [CourseController::class,'create'])->name('college.admin.addCourse');
    Route::post('college/admin/courses/save-course', [CourseController::class,'store'])->name('college.admin.saveCourse');
    Route::get('college/admin/courses/edit/{id}', [CourseController::class,'edit'])->name('college.admin.editCourse');
    Route::put('college/admin/courses/update/{id}', [CourseController::class,'update'])->name('college.admin.updateCourse');
    //------------------------------------End------------------------------------------//

    //-------------------------------------Session---------------------------------------//
    Route::get('college/admin/sessions', [SessionController::class,'index'])->name('college.admin.sessions');
    Route::get('college/admin/sessions/add-session', [SessionController::class,'create'])->name('college.admin.addSession');
    Route::post('college/admin/sessions/save-session', [SessionController::class,'store'])->name('college.admin.saveSession');
    Route::get('college/admin/sessions/edit/{id}', [SessionController::class,'edit'])->name('college.admin.editSession');
    Route::put('college/admin/sessions/update/{id}', [SessionController::class,'update'])->name('college.admin.updateSession');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Session---------------------------------------//
    Route::get('college/admin/semesters', [SemesterController::class,'index'])->name('college.admin.semesters');
    Route::get('college/admin/semesters/add-semester', [SemesterController::class,'create'])->name('college.admin.addSemester');
    Route::post('college/admin/semesters/save-semester', [SemesterController::class,'store'])->name('college.admin.saveSemester');
    Route::get('college/admin/semesters/edit/{id}', [SemesterController::class,'edit'])->name('college.admin.editSemester');
    Route::put('college/admin/semesters/update/{id}', [SemesterController::class,'update'])->name('college.admin.updateSemester');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Departments---------------------------------------//
    Route::get('college/admin/departments', [DepartmentController::class,'index'])->name('college.admin.departments');
    Route::get('college/admin/departments/add-department', [DepartmentController::class,'create'])->name('college.admin.addDepartment');
    Route::post('college/admin/departments/save-department', [DepartmentController::class,'store'])->name('college.admin.saveDepartment');
    Route::get('college/admin/departments/edit/{id}', [DepartmentController::class,'edit'])->name('college.admin.editDepartment');
    Route::put('college/admin/departments/update/{id}', [DepartmentController::class,'update'])->name('college.admin.updateDepartment');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Roles---------------------------------------//
    Route::get('college/admin/roles', [RoleController::class,'index'])->name('college.admin.roles');
    Route::get('college/admin/roles/add-role', [RoleController::class,'create'])->name('college.admin.addRole');
    Route::post('college/admin/roles/save-role', [RoleController::class,'store'])->name('college.admin.saveRole');
    Route::get('college/admin/roles/edit/{id}', [RoleController::class,'edit'])->name('college.admin.editRole');
    Route::put('college/admin/roles/update/{id}', [RoleController::class,'update'])->name('college.admin.updateRole');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Subjects---------------------------------------//
    Route::get('college/admin/subjects', [SubjectController::class,'index'])->name('college.admin.subjects');
    Route::get('college/admin/subjects/add-subject', [SubjectController::class,'create'])->name('college.admin.addSubject');
    Route::post('college/admin/subjects/save-subject', [SubjectController::class,'store'])->name('college.admin.saveSubject');
    Route::get('college/admin/subjects/edit/{id}', [SubjectController::class,'edit'])->name('college.admin.editSubject');
    Route::put('college/admin/subjects/update/{id}', [SubjectController::class,'update'])->name('college.admin.updateSubject');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Admin Users---------------------------------------//
    Route::get('college/admin/admins', [AdminuserController::class,'index'])->name('college.admin.admins');
    Route::get('college/admin/admins/add-admin', [AdminuserController::class,'create'])->name('college.admin.addAdmin');
    Route::post('college/admin/admins/save-admin', [AdminuserController::class,'store'])->name('college.admin.saveAdmin');
    Route::get('college/admin/admins/edit/{id}', [AdminuserController::class,'edit'])->name('college.admin.editAdmin');
    Route::put('college/admin/admins/update/{id}', [AdminuserController::class,'update'])->name('college.admin.updateAdmin');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Faculty Users---------------------------------------//
    Route::get('college/admin/faculties', [FacultyController::class,'index'])->name('college.admin.faculties');
    Route::get('college/admin/faculties/add-faculty', [FacultyController::class,'create'])->name('college.admin.addFaculty');
    Route::post('college/admin/faculties/save-faculty', [FacultyController::class,'store'])->name('college.admin.saveFaculty');
    Route::get('college/admin/faculties/edit/{id}', [FacultyController::class,'edit'])->name('college.admin.editFaculty');
    Route::put('college/admin/faculties/update/{id}', [FacultyController::class,'update'])->name('college.admin.updateFaculty');
    //--------------------------------------End------------------------------------------//

    //--------------------------------Profile-----------------------------------------//
    Route::get('college/admin/profile', [ProfileController::class,'index'])->name('college.admin.profile');
    Route::post('college/admin/account/save-profile', [ProfileController::class,'store'])->name('college.admin.saveProfile');
    Route::post('college/admin/account/upload-image', [ProfileController::class,'uploadImage'])->name('college.admin.uploadProfile');
    //---------------------------------End--------------------------------------------//

    //-------------------------------------Assign Teacher---------------------------------------//
    Route::get('college/admin/assign-teachers', [AssignTeacherController::class,'index'])->name('college.admin.assignList');
    Route::get('college/admin/assign-teachers/add', [AssignTeacherController::class,'create'])->name('college.admin.add');
    Route::post('college/admin/assign-teachers/save', [AssignTeacherController::class,'store'])->name('college.admin.save');
    Route::get('college/admin/assign-teachers/edit/{id}', [AssignTeacherController::class,'edit'])->name('college.admin.edit');
    Route::put('college/admin/assign-teachers/update/{id}', [AssignTeacherController::class,'update'])->name('college.admin.update');
    Route::post('college/admin/assign-teachers/ajax-add-item', [AssignTeacherController::class,'add_line_items']);
    Route::post('college/admin/assign-teachers/ajax-delete-item', [AssignTeacherController::class,'del_line_item']);
    //--------------------------------------End------------------------------------------//

    //-------------------------------HOD Master---------------------------------//
    Route::get('college/admin/hod', [HodController::class,'index'])->name('college.admin.hodList');
    Route::get('college/admin/hod/add', [HodController::class,'create'])->name('college.admin.addHod');
    Route::post('college/admin/hod/save', [HodController::class,'store'])->name('college.admin.saveHod');
    Route::get('college/admin/hod/edit/{id}', [HodController::class,'edit'])->name('college.admin.editHod');
    Route::put('college/admin/hod/update/{id}', [HodController::class,'update'])->name('college.admin.updateHod');
    //-------------------------------------End--------------------------------------------//

    //-------------------------------Time Master---------------------------------//
    Route::get('college/admin/time', [TimeController::class,'index'])->name('college.admin.timeList');
    Route::get('college/admin/time/add', [TimeController::class,'create'])->name('college.admin.addTime');
    Route::post('college/admin/time/save', [TimeController::class,'store'])->name('college.admin.saveTime');
    Route::get('college/admin/time/edit/{id}', [TimeController::class,'edit'])->name('college.admin.editTime');
    Route::put('college/admin/time/update/{id}', [TimeController::class,'update'])->name('college.admin.updateTime');
    //-------------------------------------End--------------------------------------------//

    //-------------------------------Routine Creation---------------------------------//
    Route::get('college/admin/routine', [RoutineController::class,'index'])->name('college.admin.routineList');
    Route::get('college/admin/routine/add', [RoutineController::class,'create'])->name('college.admin.addRoutine');
    Route::post('college/admin/routine/save', [RoutineController::class,'store'])->name('college.admin.saveRoutine');
    Route::get('college/admin/routine/edit/{id}', [RoutineController::class,'edit'])->name('college.admin.editRoutine');
    Route::put('college/admin/routine/update/{id}', [RoutineController::class,'update'])->name('college.admin.updateRoutine');
    Route::post('college/admin/routine/ajax-search-routine', [RoutineController::class,'search_routine']);
    //-------------------------------------End--------------------------------------------//

    //-------------------------------------CMS Pages---------------------------------------//
    Route::get('college/admin/cms', [CmsController::class,'index'])->name('college.admin.pages');
    Route::get('college/admin/cms/add-page', [CmsController::class,'create'])->name('college.admin.addPage');
    Route::post('college/admin/cms/save-page', [CmsController::class,'store'])->name('college.admin.savePage');
    Route::get('college/admin/cms/edit/{id}', [CmsController::class,'edit'])->name('college.admin.editPage');
    Route::put('college/admin/cms/update/{id}', [CmsController::class,'update'])->name('college.admin.updatePage');
    //--------------------------------------End------------------------------------------//

    //-------------------------------------Benefits---------------------------------------//
    Route::get('college/admin/benefits', [BenefitController::class,'index'])->name('college.admin.benefits');
    Route::get('college/admin/benefits/add-benefit', [BenefitController::class,'create'])->name('college.admin.addBenefit');
    Route::post('college/admin/benefits/save-benefit', [BenefitController::class,'store'])->name('college.admin.saveBenefit');
    Route::get('college/admin/benefits/edit/{id}', [BenefitController::class,'edit'])->name('college.admin.editBenefit');
    Route::put('college/admin/benefits/update/{id}', [BenefitController::class,'update'])->name('college.admin.updateBenefit');
    //--------------------------------------End------------------------------------------//

});
