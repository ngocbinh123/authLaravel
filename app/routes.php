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

Route::get('/login',function(){
	return View::make('login');
});

Route::post('/login',function(){
	$userData = array(
		'email'=>Input::get('user_input'),
		'password'=> Input::get('password')
	);

	if(Auth::attempt($userData)){
		return Redirect::to('editprofile');
	}else{
		return Redirect::to('login');
	}
});


Route::get('/register',function(){
	return View::make('register');
});

Route::post('/register',function(){
	/*$userData = array(
		'username'=>Input::get('username'),
		'email'=>Input::get('email'),
		'password'=> Input::get('password')
	);
	$user = new User($userData);*/
	$user = new User();
	$user->username=Input::get('username');
	$user->email=Input::get('email');
	$user->password=Hash::make(Input::get('password'));
	$user->save();
	return Redirect::to('login');
});

Route::get('/editprofile',array('before'=>'auth',function(){
	return View::make('editProfile');
}));


Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('login');
});