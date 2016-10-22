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

	
	//public static $data['pList']=App::make('ProductListController')->{'getAll'}();
	//public static $data['pType']=App::make('ProductTypeController')->{'getAll'}();

	/*-------------Show page------------------*/
	
	public function getHome(){
		$hot_tag = "hot";
		$special_tag = "special";
		
		$data['title'] = "Việt Step Travel";
		
		$data[$hot_tag]  = DB::table('Tour')
			->where('Tour.tag', '=', $hot_tag)->get();
		
		$data[$special_tag]  = DB::table('Tour')
			->where('Tour.tag', '=', $special_tag)->get();
		return View::make('home.index',compact('data'));
	}

	public function getAbout(){
		return View::make('about.index',compact('data'));
	}

	public function getContact(){
		return View::make('contact.index',compact('data'));
	}

	// profile 
	public function showEditProfile(){
		return View::make('editProfile');
	}
}

