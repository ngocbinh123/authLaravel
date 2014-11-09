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

	
	public static $data['pList']=App::make('ProductListController')->{'getAll'}();
	public static $data['pType']=App::make('ProductTypeController')->{'getAll'}();

	/*-------------Show page------------------*/
	public function getHome(){
		$data['product']=DB::table('product')->get();
		return View::make('home.index', compact('data'));
	}

	// profile 
	public function showEditProfile(){
		return View::make('editProfile');
	}

	/*-------------Get data------------------*/
	/*public function getProductList(){
		$proLs = DB::table('productType')->get();
		return $proLs;
	}*/

}

