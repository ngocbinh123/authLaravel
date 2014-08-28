<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//login
Route::get('/login',array('uses'=>'HomeController@showLogin'));
Route::post('/login',array('uses'=>'HomeController@doLogin'));

//register
Route::get('/register',array('uses'=>'HomeController@showRegister'));
Route::post('/register',array('uses'=>'HomeController@doRegister'));

//logout 
Route::get('logout',array('uses'=>'HomeController@doLogout'));

//profile 
Route::get('/editprofile',array('before'=>'auth','uses'=>'HomeController@showEditProfile'));

//password remind
Route::get('/passwordremind',array('uses'=>'RemindersController@getRemind','as'=>'password.remind'));
Route::post('/passwordremind',array('uses'=>'RemindersController@postRemind'));

//reset password 
Route::get('/passwordreset/{token}',array('uses'=>'RemindersController@getReset'));
Route::post('/passwordreset/{token}',array('uses'=>'RemindersController@postReset'));
