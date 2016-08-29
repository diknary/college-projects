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
	Route::get('/', [
		'uses' => 'AdminController@getNews',
		'as' => 'welcome'
	]);
	Route::get('/login', function () {
    return view('auth.login');
	});
	Route::post('auth', 'UserController@auth');
});

Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin-dashboard', 'ActivityController@adminactivity');
	Route::get('admin/documents', [
		'uses' => 'DocumentController@adminfolder',
		'as' => 'admin/documents'
	]);
	Route::get('/operator-add', 'AdminController@addOperator');
	Route::get('/publish-news', function () {
    return view('admin.admin-posts');
	});
	Route::post('/news-post', [
		'uses' => 'AdminController@postNews',
		'as' => 'news-post'
	]);
	Route::get('/admin-logout', 'UserController@logout');

	Route::get('/draft-news', [
		'uses' => 'AdminController@getDraft',
		'as' => 'draft-news'
	]);
	Route::get('/list-news', [
		'uses' => 'AdminController@getNewsList',
		'as' => 'list-news'
		]);
	Route::get('/delete-news', [
		'uses' => 'AdminController@deleteNews',
		'as' => 'delete-news'
	]);
	Route::get('/edit-news', [
		'uses' => 'AdminController@editNews',
		'as' => 'edit-news'
	]);
	Route::post('/save-news', [
		'uses' => 'AdminController@saveNews',
		'as' => 'save-news'
	]);
	Route::get('/services', [
		'uses' => 'AdminController@services',
		'as' => 'services'
	]);
	Route::post('/change-status', [
		'uses' => 'AdminController@changeStatus',
		'as' => 'change-status'
	]);
	
	Route::get('/admin-logout', 'UserController@logout');

});

Route::group(['middleware' => 'supervisor'], function(){
	Route::get('/supervisor-dashboard', 'ActivityController@supervisoractivity');
	Route::get('supervisor/documents', [
	 'uses' => 'DocumentController@supervisorfolder',
	 'as'   => 'supervisor/documents'
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
	Route::post('/document-copy', [
		'uses' => 'DocumentController@copyDocument',
		'as' => 'document-copy'
	]);
	Route::post('/document-paste', [
		'uses' => 'DocumentController@pasteDocument',
		'as' => 'document-paste'
	]);
	Route::post('/document-cut', [
		'uses' => 'DocumentController@cutDocument',
		'as' => 'document-cut'
	]);
	Route::post('/document-place', [
		'uses' => 'DocumentController@placeDocument',
		'as' => 'document-place'
	]);
	Route::post('/document-rename', [
		'uses' => 'DocumentController@renameDocument',
		'as' => 'document-rename'
	]);
	Route::post('/document-update', [
		'uses' => 'DocumentController@updateDoc',
		'as' => 'document-update'
	]);
	Route::post('/file-upload', [
		'uses' => 'DocumentController@uploadFile',
		'as' => 'file-upload'
	]);


});

Route::group(['middleware' => 'student'], function(){
	Route::get('/student-dashboard', [
		'uses' => 'FormUploadController@studentDashboard',
		'as' => 'student-dashboard'
	]);
	Route::get('/student/documents/', [
		'uses' => 'DocumentController@studentfolder',
		'as' => 'student/documents'
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
	Route::get('/staff/documents/', [
		'uses' => 'DocumentController@stafffolder',
		'as' => 'staff/documents'
	]);
	
	Route::get('/staff-logout', 'UserController@logout');

});

Route::get('test', function(){
	return view('test');
});












