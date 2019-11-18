<?php

Route::get('/home',['as' => 'home','uses' => 'PageController@home']);
Route::get('/login',['as' => 'login','uses' => 'LoginController@getLogin']);
Route::post('/login',['as' => 'login','uses' =>'LoginController@postLogin']);
Route::group(['middleware' => ['authen','roles']],function() {
	Route::get('/logout',['as' => 'logout', 'uses'=>'LoginController@getLogout']);
	Route::get('/dashboard',['as' => 'dashboard','uses' => 'DashboardController@dashboard']);
});
Route::group(['middleware' => ['authen','roles'],'roles' =>['admin']],function() {
	
});
Route::get('/noPermission',function() {
	return view('permission.noPermission');
})->name('noPermission');
