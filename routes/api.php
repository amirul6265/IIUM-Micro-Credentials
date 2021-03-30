<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgrammesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\AddController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('lol','App\Http\Controllers\Auth\CoursesController@index');

Route::apiResource("listofprogrammes",ProgrammesController::class);
Route::apiResource("listofcourses",CoursesController::class);

Route::get('/listofcourses', [CoursesController::class, 'index']);
Route::post('/add',[AddController::class,'add']);