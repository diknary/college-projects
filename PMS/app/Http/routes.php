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

Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
	});
	Route::get('/admin-documents/', [
		'uses' => 'DocumentController@adminfolder',
		'as' => 'admin-documents'
	]);
	Route::get('/operator-add', 'AdminController@addOperator');

	Route::get('/publish-news', function () {
    return view('admin.admin-posts');
	});
	Route::get('/admin-logout', 'UserController@logout');

});

Route::group(['middleware' => 'supervisor'], function(){
	Route::get('/supervisor-dashboard', function () {
    return view('supervisor.supervisor-dashboard');
	});
	Route::get('/documents/', [
	 'uses' => 'DocumentController@supervisorfolder',
	 'as'   => 'supervisor-documents'
	 ]);
	Route::get('/supervisor-logout', 'UserController@logout');

	// folder
	Route::post('/folder-create', [
		'uses' => 'DocumentController@createFolder',
		'as' => 'folder-create'
	]);
	Route::post('/document-delete', [
		'uses' => 'DocumentController@deleteDocument',
		'as' => 'document-delete'
	]);
	Route::post('/document-move', [
		'uses' => 'DocumentController@moveFolder',
		'as' => 'document-move'
	]);
	Route::post('/document-copy', [
		'uses' => 'DocumentController@copyFolder',
		'as' => 'document-copy'
	]);
	Route::post('/document-rename', [
		'uses' => 'DocumentController@renameFolder',
		'as' => 'document-rename'
	]);
	Route::post('/file-upload', [
		'uses' => 'DocumentController@uploadFile',
		'as' => 'file-upload'
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
	Route::post('/form-upload', [
		'uses' => 'FormUploadController@uploadForm',
		'as' => 'form-upload'
	]);

	Route::get('/student-logout', 'UserController@logout');

});

Route::group(['middleware' => 'staff'], function(){
	Route::get('/staff-dashboard', function () {
    return view('staff.staff-dashboard');
	});
	Route::get('/staff-documents/', [
		'uses' => 'DocumentController@stafffolder',
		'as' => 'staff-documents'
	]);
	
	Route::get('/staff-logout', 'UserController@logout');

});

Route::get('test', function(){
	return view('test');
})
;












