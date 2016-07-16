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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
	
	return view('layouts.login');
	
});
Route::post('/auth', 'LoginController@getValue');

Route::get('/home', 'HomeController@viewHome');

Route::get('/logout', 'LoginController@destroySession');

Route::get('/form/{id}', 'SubmitletterController@formLetter');

Route::post('/form/submit', 'SubmitletterController@submit');

Route::get('/admin', 'AdminController@viewLetter');

Route::get('/status', 'StatusController@getStatus');

Route::get('/verify/', 'StatusController@setStatus');



