<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoodleController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgrammesController;
use App\Http\Controllers\EnrollController;

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
    return view('home');
});

/* AUTH */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

/* PROGRAMMES */
Route::get('/kict', [ProgrammesController::class, 'kictview', 'kict']);
Route::get('/koe', [ProgrammesController::class, 'koeview']);

/* COURSE */
Route::get('/2/4',[CoursesController::class, 'bcsview']);
Route::get('/2/5',[CoursesController::class, 'bitview']);
Route::get('/3/6',[CoursesController::class, 'btenview']);
Route::get('/3/7',[CoursesController::class, 'mechview']);
Route::get('/3/8',[CoursesController::class, 'mcteview']);

Route::get('/enroll/3',[EnrollController::class, 'osview']);
Route::get('/enroll/4',[EnrollController::class, 'dsview']);
Route::get('/enroll/5',[EnrollController::class, 'mlview']);


Route::get('/bcscourse',[CoursesController::class, 'view']);


Route::get('/bcscourse/CSC3401', function () {
    return view('CSC3401');
});
Route::get('/bcscourse/CSC3305', function () {
    return view('CSC3305');
});
Route::get('/bcscourse/CSC3304', function () {
    return view('CSC3304');
});
Route::get('/bcscourse/INFO2201', function () {
    return view('INFO2201');
});
Route::get('/bcscourse/INFO3304', function () {
    return view('INFO3304');
});
Route::get('/bcscourse/INFO3305', function () {
    return view('INFO3305');
});