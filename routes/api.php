<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('course',[
    'as'=>'course.create',
    'uses'=>'App\Http\Controllers\CourseController@create'
    ]);
Route::post('student',[
    'as'=>'student.create',
    'uses'=>'App\Http\Controllers\StudentController@create'
    ]);
    Route::post('enrol',[
        'as'=>'enrol.create',
        'uses'=>'App\Http\Controllers\EnrolController@create'
        ]);
