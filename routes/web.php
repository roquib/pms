<?php

Route::get('/admin/login', ['as' => 'admin.login', 'uses' => 'LoginController@getLogin']);
Route::post('/admin/login', ['as' => 'admin.login', 'uses' => 'LoginController@postLogin']);
// Route::post('/admin/logout', ['as' => 'admin.logout', 'uses' => 'LoginController@getLogout']);
// Route::group(['middleware' => ['authen', 'roles']], function () { });
Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin', 'testadmin', 'billadmin', 'doctoradmin', 'medicineadmin', 'reception']], function () {
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@dashboard']);
    Route::get('/admin/profile', ['as' => 'profile', 'uses' => 'DashboardController@profile']);
    Route::get('/admin/all', ['as' => 'all-admins', 'uses' => 'DashboardController@allAdmins']);
    Route::get('/admin/view/{id}', ['as' => 'view-admin', 'uses' => 'DashboardController@viewAdmin']);
    Route::get('/admin/setting', ['as' => 'setting', 'uses' => 'DashboardController@setting']);
    Route::get('/patient/all', ['as' => 'allPatient', 'uses' => 'DashboardController@allPatient']);
    Route::get('/admin/show/patient/all', ['as' => 'admin.show.patient.all', 'uses' => 'DashboardController@adminShowPatientAll']);
    Route::get('/patient/{id}/payment', ['as' => 'bill.payment', 'uses' => 'DashboardController@billPayment']);
    Route::get('/patient/{id}/payment/confirm', ['as' => 'bill.payment.confirm', 'uses' => 'DashboardController@billPaymentConfirm']);
    Route::get('/patient/all/bill', ['as' => 'bill.admin', 'uses' => 'DashboardController@bill']);
    Route::get('/prescription/{id}/patient/{patientid}', ['as' => 'prescription.doc', 'uses' => 'PrescriptionController@prescriptionDoc']);
    Route::get('/bill/payment', ['as' => 'payment', 'uses' => 'DashboardController@payment']);
    Route::post('/prescription/store', ['as' => 'prescription.store', 'uses' => 'PrescriptionController@prescriptionStore']);
    Route::get('/patients/{id}', ['middleware' => ['auth'], 'as' => 'showPatient', 'uses' => 'PageController@showPatient']);
    Route::post('/delete/{id}', ['as' => 'delete', 'uses' => 'DashboardController@destroy']);
    Route::post('/pay', ['as' => 'pay', 'uses' => 'PaymentController@store']);
    Route::post('/medicine/patient', ['as' => 'patient.post', 'uses' => 'PharmecyController@store']);
    Route::get('/medicine/patient', ['as' => 'patient.get', 'uses' => 'PharmecyController@fetch']);
    Route::get('/medicine/patient/{id}/view', ['as' => 'patient.get.view', 'uses' => 'PharmecyController@view']);
    Route::get('/registration/form/doctor', ['as' => 'registration.form.doctor', 'uses' => 'DashboardController@formdoctor']);
    Route::get('/registration/form/bill', ['as' => 'registration.form.bill', 'uses' => 'DashboardController@formbill']);
    Route::get('/registration/form/medicine', ['as' => 'registration.form.medicine', 'uses' => 'DashboardController@formmedicine']);
    Route::get('/reception', ['as' => 'reception', 'uses' => 'DashboardController@reception']);
    Route::get('/registration/form/test', ['as' => 'registration.form.test', 'uses' => 'DashboardController@formtest']);
    Route::get('/search', ['as' => 'search', 'uses' => 'PageController@search']);
});
Route::get('/noPermission', function () {
    return view('permission.noPermission');
})->name('noPermission');
// Route::get('/', ['as' => '/', 'uses' => 'HomeController@index']);
Route::get('/doctor', ['as' => 'doctor', 'uses' => 'PageController@doctor']);
Route::get('/', ['as' => '/', 'uses' => 'PageController@home']);
Route::get('/appointment', ['middleware' => ['auth'], 'as' => 'appointment', 'uses' => 'PageController@appointment']);
Route::post('/patient/appointment/confirm', ['middleware' => ['auth'], 'as' => 'appointmentConfirm', 'uses' => 'PageController@appointmentConfirm']);
Route::get('/patient/appointment/confirm', ['middleware' => ['auth'], 'as' => 'appointmentConfirmGet', 'uses' => 'PageController@appointmentConfirmGet']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'PageController@contact']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/user', 'HomeController@profile')->name('profile.user');

//Category Doctor route

Route::get('/Cardiology', ['as' => 'Cardiology', 'uses' => 'Category_Doctor_controller@showCardiology'])->name('Cardiology');

Route::get('/Dental', ['as' => 'Dental', 'uses' => 'Category_Doctor_controller@showDental'])->name('Dental');
Route::get('/Endocrinology', ['as' => 'Endocrinology', 'uses' => 'Category_Doctor_controller@showEndocrinology'])->name('Endocrinology');
Route::get('/Neurology', ['as' => 'Neurology', 'uses' => 'Category_Doctor_controller@showNeurology'])->name('Neurology');
Route::get('/Nephrology', ['as' => 'Nephrology', 'uses' => 'Category_Doctor_controller@showNephrology'])->name('Nephrology');
Route::get('/Psychology', ['as' => 'Psychology', 'uses' => 'Category_Doctor_controller@showPsychology'])->name('Psychology');
Route::get('/Obstetrics', ['as' => 'Obstetrics', 'uses' => 'Category_Doctor_controller@showObstetrics'])->name('Obstetrics');
Route::get('/Ophthalmology', ['as' => 'Ophthalmology', 'uses' => 'Category_Doctor_controller@showOphthalmology'])->name('Ophthalmology');
Route::get('/Rheumatology', ['as' => 'Rheumatology', 'uses' => 'Category_Doctor_controller@showRheumatology'])->name('Rheumatology');
Route::get('/Urology', ['as' => 'Urology', 'uses' => 'Category_Doctor_controller@showUrology'])->name('Urology');

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

//admin login route

Route::get('/admin/login/form', ['as' => 'admin/login/form', 'uses' => 'all_admin_login_Controller@login'])->name('login');

//test route

Route::get('/admin/alltest', ['as' => 'alltest', 'uses' => 'all_admin_login_Controller@alltest'])->name('alltest');

//room route

Route::get('/admin/allroom', ['as' => 'allroom', 'uses' => 'all_admin_login_Controller@allroom'])->name('allroom');

//Medicine route

Route::get('/admin/allmedicine', ['as' => 'allmedicine', 'uses' => 'all_admin_login_Controller@allmedicine'])->name('allmedicine');
