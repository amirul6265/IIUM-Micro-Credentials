<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoodleController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgrammesController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\EnrolledCoursesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

/* AUTH */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/user/enrolled', [EnrolledCoursesController::class, 'showCourseEnrolled']);

/* PROGRAMME */
Route::get('/kict', [ProgrammesController::class, 'kictview']);
Route::get('/koe', [ProgrammesController::class, 'koeview']);

/* COURSES */
Route::get('/{data_categoryname}/{data_categorynumber}',[CoursesController::class, 'eachcoursesview']);

/* ALLCOURSE */
Route::get('/all',[CoursesController::class, 'allview']);
/* ENROLL */
Route::get('/{data_courseid}',[EnrollController::class, 'courseview']);