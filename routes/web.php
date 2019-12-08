<?php


Route::get('/admin/login', ['as' => 'admin.login', 'uses' => 'LoginController@getLogin']);
Route::post('/admin/login', ['as' => 'admin.login', 'uses' => 'LoginController@postLogin']);
Route::group(['middleware' => ['authen', 'roles']], function () {
	Route::post('/admin/logout', ['as' => 'admin.logout', 'uses' => 'LoginController@getLogout']);
	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@dashboard']);
	Route::get('/admin/profile', ['as' => 'profile', 'uses' => 'DashboardController@profile']);
	Route::get('/admin/all', ['as' => 'all-admins', 'uses' => 'DashboardController@allAdmins']);
	Route::get('/admin/view/{id}', ['as' => 'view-admin', 'uses' => 'DashboardController@viewAdmin']);
	Route::get('/admin/setting', ['as' => 'setting', 'uses' => 'DashboardController@setting']);
	Route::get('/patient/all', ['as' => 'allPatient', 'uses' => 'DashboardController@allPatient']);
	Route::get('/prescription/{id}', ['as' => 'prescription.doc', 'uses' => 'PrescriptionController@prescriptionDoc']);
	Route::get('/patients/{id}', ['middleware' => ['auth'], 'as' => 'showPatient', 'uses' => 'PageController@showPatient']);
});
Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin']], function () { });
Route::get('/noPermission', function () {
	return view('permission.noPermission');
})->name('noPermission');
Route::get('/', ['as' => '/', 'uses' => 'PageController@home']);
Route::get('/doctor', ['as' => 'doctor', 'uses' => 'PageController@doctor']);
Route::get('/appointment', ['middleware' => ['auth'], 'as' => 'appointment', 'uses' => 'PageController@appointment']);
Route::post('/patient/appointment/confirm', ['middleware' => ['auth'], 'as' => 'appointmentConfirm', 'uses' => 'PageController@appointmentConfirm']);
Route::get('/patient/appointment/confirm', ['middleware' => ['auth'], 'as' => 'appointmentConfirmGet', 'uses' => 'PageController@appointmentConfirmGet']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'PageController@contact']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
