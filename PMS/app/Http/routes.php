<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'tamu'], function(){
	Route::get('/', function () {
    return view('welcome');
	});
	Route::get('/login', function () {
    return view('auth.login');
	});
	Route::post('auth', 'UserController@auth');
});

Route::group(['middleware' => 'supervisor'], function(){
	Route::get('/home', function () {
    return view('supervisor.supervisor-dashboard');
	});
	Route::get('/pjaudit', function () {
    return view('supervisor.adm-documents');
	});
	Route::get('/mipadoc', function () {
    return view('supervisor.mipa-documents');
	});
	Route::get('/komdoc', function () {
    return view('supervisor.kom-documents');
	});
	Route::get('/documents', function () {
    return view('supervisor.supervisor-documents');
	});
	Route::get('/supervisor-logout', 'UserController@logout');

});

Route::group(['middleware' => 'student'], function(){
	Route::get('/student-dashboard', function () {
    return view('student.student-dashboard');
	});
	Route::get('/student-documents/', function () {
    return view('student.student-documents');
	});
	Route::get('/student-documents/ilkom', function () {
    return view('student.student-documents-ilkom');
	});
	Route::get('/student-documents/ilkom/frm', function () {
    return view('student.student-documents-ilkom-frm');
	});
	Route::get('/student-documents/ilkom/frm/akademik', function () {
    return view('student.student-documents-ilkom-frm-akademik');
	});
	Route::get('/student-documents/ilkom/pob-teknis', function () {
    return view('student.student-documents-ilkom-pob_teknis');
	});
	Route::get('/student-documents/ilkom/pob-teknis/akademik', function () {
    return view('student.student-documents-ilkom-pob_teknis-akademik');
	});
	Route::get('/student-upload', function () {
    return view('student.student-upload');
	});
	Route::get('/student-logout', 'UserController@logout');

});













