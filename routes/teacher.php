<?php

use App\Http\Controllers\Teacher\TeacherController;
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

//--------------------------------------Teacher Routes--------------------------------//
Route::get('admin/teacher',[TeacherController::class,'login_form'])->name('teacher.login');
Route::post('teacher-functionality',[TeacherController::class,'login_functionality'])->name('teacher.functionality');

Route::group(['middleware'=>'teacher'],function(){

    Route::get('teacher/logout',[TeacherController::class,'logout'])->name('teacher.logout');
    Route::get('teacher/dashboard',[TeacherController::class,'dashboard'])->name('teacher.dashboard');
});
