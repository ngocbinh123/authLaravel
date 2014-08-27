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


Route::get('/login',array('uses'=>'HomeController@showLogin'));
Route::post('/login',array('uses'=>'HomeController@doLogin'));

Route::get('/register',array('uses'=>'HomeController@showRegister'));
Route::post('/register',array('uses'=>'HomeController@doRegister'));

Route::get('/editprofile',array('before'=>'auth',function(){
	return View::make('editProfile');
}));

/*
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('login');
});*/

Route::get('logout',array('uses'=>'HomeController@doLogout'));