<?php

use Illuminate\Http\Request;

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
Route::get('/user/{id}', 'API\UserController@findUser');
Route::post('/department', 'API\UserController@findDoctorWithDept')->name('findDoctorWithDept');
Route::get('/patient/all/', 'API\PatientController@all')->name('all.patient');
Route::post('/medicine', 'API\AllApiController@medicines')->name('medicine');
Route::post('/test', 'API\AllApiController@tests')->name('test');
