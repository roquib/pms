<?php

Route::get('/home', ['as' => 'home', 'uses' => 'PageController@home']);
Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@postLogin']);
Route::group(['middleware' => ['authen', 'roles']], function () {
	Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);
	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@dashboard']);
	Route::get('/admin/profile', ['as' => 'profile', 'uses' => 'DashboardController@profile']);
	Route::get('/admin/all', ['as' => 'all-admins', 'uses' => 'DashboardController@allAdmins']);
	Route::get('/admin/view/{id}', ['as' => 'view-admin', 'uses' => 'DashboardController@viewAdmin']);
	Route::get('/admin/setting', ['as' => 'setting', 'uses' => 'DashboardController@setting']);
});
Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin']], function () { });
Route::get('/noPermission', function () {
	return view('permission.noPermission');
})->name('noPermission');
