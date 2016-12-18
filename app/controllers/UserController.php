<?php

class UserController extends BaseController {

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
	public function getLogin(){
		$data['pList']=DB::table('productList')->get();
		$data['pType']=DB::table('productType')->get();
		$data['pro']=App::make('ProductController')->{'getDataProductAll'}();
		if(Auth::check()){
			return Redirect::to('/',compact('data'));// go to home page
		}else{
			return View::make('login',compact('data'));
		}
	}

	public function postLogin(){
		$userData = array(
			'email'=>Input::get('email'),
			'password'=> Input::get('password')
		);
        //$results = DB::select('select * from users where id = ?', array(1));
        $sql = 'select * from users where email = ' . $userData["email"] . ' and password = ' . $userData['password'];
        //print_r($sql);
//        $results = DB::select($sql);
//
        $results = DB::select('select * from users where email = ? and password = ?', array($userData['email'],$userData['password']));
        $data['title'] = "thong tin tai khoan";
        if (count($results) > 0) {
            $data["user"] = $results[0];
        }
        return View::make('User.index',compact('data'));
		// check a user data is exist in database. 
//		if(Auth::attempt($userData)){
//			return Redirect::to('/');// go to home page
//		}else{
//			return Redirect::to('login');
//		}
	}

	//register 
	public function getRegister(){
		return View::make('register');
	}

	public function postRegister(){
		$user = new User();
		$user->username=Input::get('username');
		$user->email=Input::get('email');
		$user->password=Hash::make(Input::get('password'));
		$user->save();
		return Redirect::to('login');
	}

	//logout 
	public function getLogout(){
		Auth::logout();
		return Redirect::to('login');
	}

}

