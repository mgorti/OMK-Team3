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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('mentors','MentorController');
Route::resource('students','StudentController');
Route::resource('addcomments','AddcommentController');
Route::resource('staffs','StaffController');
Route::resource('admins','AdminController');
Route::resource('meeting_schedules','MeetingScheduleController');
Route::resource('meeting_mentors','MeetingMentorsController');
Route::resource('student_details','StudentDetailsController');
Route::resource('meeting_students','MeetingStudentsController');

Route::get('profile','UserController@profile');
Route::post('profile1','UserController@update_avatar');

Auth::routes();
// Excel routes
Route::get('stfprnt', 'ExcelController@staff_print');
Route::get('mntrprnt', 'ExcelController@mentor_print');
Route::get('stdprnt', 'ExcelController@student_print');
// end of button pages

//
Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');
Route::get('dwnld_mentor/{type}', 'ExcelController@dwnld_mentor');
Route::get('dwnld_student/{type}', 'ExcelController@dwnld_student');
Route::post('importExcel', 'ExcelController@importExcel');
// 

