<?php

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
    return view('welcome');
});


// Route::get('/test', function () {
//     return view('test');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','ProfileController@profile')->name('profile');



//semester Registration regular
Route::get('/registration/{std_id}','SemesterRegistrationController@registration');
Route::get('/semesterRegistration','SemesterRegistrationController@semester_registration');
Route::post('/save_regular','SemesterRegistrationController@save_regular');
Route::get('/view_regular/{std_id}','SemesterRegistrationController@view_regular');


//semester Registration improvement
Route::get('/improve/{std_id}','SemesterImprovementController@improve');
Route::get('/semesterRegistration_improve','SemesterImprovementController@semester_registration_improve');
Route::post('/save_improve','SemesterImprovementController@save_improve');
Route::get('/view_improve/{std_id}','SemesterImprovementController@view_improve');

Route::get('/downloadPDF','DynamicPDFController@downloadPdf');


//notice
Route::get('/notice','NoticeController@notice');
Route::get('payment','PaymentController@payment');
Route::get('/admit','AdmitController@admit');


//help
Route::get('help','NoticeController@help');
// Route::get('/help','DynamicPDFController@pdf');


//about
Route::get('/about','AboutController@about');


//update of student profile
Route::get('/profile_edit','ProfileController@edit')->name('profile.edit');
Route::patch('profile/{std_id}/update', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
Route::patch('image/{std_id}/update', ['as' => 'image.update', 'uses' => 'ProfileController@image_update']);
Route::patch('signature/{std_id}/update', ['as' => 'sign.update', 'uses' => 'ProfileController@sign_update']);
Route::patch('password/{std_id}/update', ['as' => 'password.update', 'uses' => 'ProfileController@password_update']);





//Course Routes
Route::get('/firstYear','FirstYearController@year1');
Route::get('/secondYear','SecondYearController@year2');
Route::get('/thirdYear','ThirdYearController@year3');
Route::get('/forthYear','ForthYearController@year4');



//admin routes
Route::get('admin/home','AdminController@index');
Route::get('admin/home','AdminController@admin_profile')->name('admin.profile');

Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');



//admin pages routes: menu
Route::get('/all_student','alladminController@all_student');
Route::get('/add_student','alladminController@add_student');
Route::get('/edit_student','alladminController@edit_student');


// admin registration form
Route::get('/regular','alladminController@regular');
Route::get('/improve','alladminController@improve');

// admin admit card
Route::get('/regular_admit','alladminController@regular_admit');
Route::get('/improve_admit','alladminController@improve_admit');


//admin student-edit routes
Route::get('/student_delete/{std_id}','alladminController@student_delete');
Route::get('/regular_delete/{std_id}','alladminController@regular_delete');
Route::get('/improve_delete/{std_id}','alladminController@improve_delete');
Route::get('/student_view/{std_id}','alladminController@student_view');
Route::get('/regular_view/{std_id}','alladminController@regular_view');
Route::get('/student_edit/{std_id}','alladminController@student_edit');

//admin course routes
Route::get('/add_course','alladminController@add_course');
Route::get('/show_course','alladminController@show_course');
Route::post('/save_course','alladminController@save_course');
Route::get('/course_delete/{course_code}','alladminController@course_delete');
Route::get('/course_edit/{course_code}','alladminController@course_edit');
Route::post('/update_course/{course_code}','alladminController@course_update');



//admin notice routes
Route::get('/add_notice','alladminController@add_notice');
Route::post('/save_notice','alladminController@save_notice');
Route::get('/show_notice','alladminController@show_notice');
Route::get('/notice_delete/{notice_id}','alladminController@notice_delete');
Route::get('/notice_edit/{notice_id}','alladminController@notice_edit');
Route::post('/update_notice/{notice_id}','alladminController@notice_update');





//print
Route::get('/prnpriview','PrintController@prnpriview');










