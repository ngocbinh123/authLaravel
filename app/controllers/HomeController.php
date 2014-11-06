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

	/*------------- HTTP Basic Authentication------------------*/
	public function getBasicAuth(){
		return View::make('basicAuth');
	}

	/*-------------Form authentication------------------*/
	//login
	public function showLogin(){
		$data= DB::table('productlist')->get();
		if(Auth::check()){
			return Redirect::to('/',compact('data'));// go to home page
		}else{
			return View::make('login',compact('data'));
		}
	}

	public function doLogin(){
		$userData = array(
			'email'=>Input::get('user_input'),
			'password'=> Input::get('password')
		);

		// check a user data is exist in database. 
		if(Auth::attempt($userData)){
			return Redirect::to('/');// go to home page
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

	/*-------------Show page------------------*/
	public function getTop(){
		$data['pList']=DB::table('productList')->get();
		$data['pType']=DB::table('productType')->get();
		return View::make('top.top', compact('data'));
	}

	// profile 
	public function showEditProfile(){
		return View::make('editProfile');
	}

	/*-------------Get data------------------*/
	public function getProductList(){
		$proLs = DB::table('productType')->get();
		return $proLs;
	}

}

