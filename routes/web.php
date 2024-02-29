<?php

use App\Http\Controllers\Teacher\WebsitetController;
use App\Http\Controllers\Teacher\HomeController;
use App\Http\Controllers\Student\CourseController;
use App\Http\Controllers\Student\DepartmentController;
use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Student\FacultyController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('/');

Route::get('/', [App\Http\Controllers\WebsitetController::class, 'index'])->name('/');
Route::get('/registration', [App\Http\Controllers\RegisterController::class, 'index'])->name('registration');
Route::post('/ajax-filter-course', [App\Http\Controllers\WebsitetController::class, 'ajax_filter_type_data'])->name('course-filter');
Route::get('/about-us', [App\Http\Controllers\WebsitetController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\WebsitetController::class, 'contact_us'])->name('contact-us');
Route::post('/enquiry', [App\Http\Controllers\WebsitetController::class, 'enquiry'])->name('website.saveEnquiry');
Route::get('/courses', [App\Http\Controllers\WebsitetController::class, 'courses'])->name('website.courses');
Route::get('/courses/course-details/{id}', [App\Http\Controllers\WebsitetController::class, 'course_details'])->name('website.course_details');
Route::get('/colleges/{code}', [App\Http\Controllers\WebsitetController::class, 'college_details'])->name('college-details');

Route::get('/faculties', [App\Http\Controllers\WebsitetController::class, 'faculties'])->name('website.faculties');
Route::get('/faculties/faculty-details/{id}', [App\Http\Controllers\WebsitetController::class, 'faculty_details'])->name('website.faculty_details');

Route::post('/save-contact', [App\Http\Controllers\WebsitetController::class, 'save_contact'])->name('website.saveContact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout',[App\Http\Controllers\HomeController::class,'logout'])->name('logout');

Route::group(['middleware'=>'web'],function(){

    //--------------------------------Profile-----------------------------------------//
    Route::get('student/profile', [ProfileController::class,'index'])->name('student-profile');
    Route::post('student/account/save-profile', [ProfileController::class,'store'])->name('saveProfile');
    Route::post('student/account/upload-image', [ProfileController::class,'uploadImage'])->name('uploadProfile');
    //---------------------------------End--------------------------------------------//

    //-----------------------------Course---------------------------------------//
    Route::get('student/courses', [CourseController::class,'index'])->name('student-courses');
    Route::get('student/courses/details/{id}', [CourseController::class,'show'])->name('showCourse');
    //Route::post('student/courses/ajax-filter', [CourseController::class,'ajax_filter_type_data'])->name('course-filter');
    //------------------------------------End------------------------------------------//

    //----------------------------------Departments----------------------------------//

    Route::get('student/departments', [DepartmentController::class,'index'])->name('student-departments');
    Route::get('student/departments/details/{id}', [DepartmentController::class,'show'])->name('showDepartment');

    //--------------------------------------End----------------------------------------//

    //----------------------------------Faculties----------------------------------//

    Route::get('student/faculties', [FacultyController::class,'index'])->name('student-faculties');
    Route::get('student/faculties/details/{id}', [FacultyController::class,'show'])->name('showFaculty');

    //--------------------------------------End----------------------------------------//
});
