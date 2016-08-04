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
	Route::get('/documents', function () {
    return view('supervisor.supervisor-documents');
	});
	Route::get('/documents/', [
	 'uses' => 'DocumentController@supervisorfolder',
	 'as'   => 'supervisor-documents'
	 ]);
	Route::get('/supervisor-logout', 'UserController@logout');

	Route::get('/operator-add', function () {
    return view('operator_add');
	});

	// folder
	Route::post('/folder-create', [
		'uses' => 'DocumentController@createFolder',
		'as' => 'folder-create'
	]);
	Route::post('/folder-delete', [
		'uses' => 'DocumentController@deleteFolder',
		'as' => 'folder-delete'
	]);
	Route::post('/folder-move', [
		'uses' => 'DocumentController@moveFolder',
		'as' => 'folder-move'
	]);
	Route::post('/folder-copy', [
		'uses' => 'DocumentController@copyFolder',
		'as' => 'folder-copy'
	]);
	Route::post('/folder-rename', [
		'uses' => 'DocumentController@renameFolder',
		'as' => 'folder-rename'
	]);


});

Route::group(['middleware' => 'student'], function(){
	Route::get('/student-dashboard', function () {
    return view('student.student-dashboard');
	});
	Route::get('/student-documents/', [
		'uses' => 'DocumentController@studentfolder',
		'as' => 'student-documents'
	]);
	Route::get('/student-upload', function () {
    return view('student.student-upload');
	});
	Route::get('/student-logout', 'UserController@logout');

});













