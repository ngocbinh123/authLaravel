<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	//login
	public function showLogin(){
		return View::make('login');
	}

	public function doLogin(){
		$userData = array(
			'email'=>Input::get('user_input'),
			'password'=> Input::get('password')
		);

		if(Auth::attempt($userData)){
			return Redirect::to('editprofile');
		}else{
			return Redirect::to('login');
		}
	}

	//register 
	public function showRegister(){
		return View::make('register');
	}

	public function doRegister(){
		$user = new User();
		$user->username=Input::get('username');
		$user->email=Input::get('email');
		$user->password=Hash::make(Input::get('password'));
		$user->save();
		return Redirect::to('login');
	}

	//logout 
	public function doLogout(){
		Auth::logout();
		return Redirect::to('login');
	}
}
