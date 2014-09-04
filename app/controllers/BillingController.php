<?php

class BillingController extends BaseController {

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

	public function getBilling(){
		return View::make('billing');
	}
	public function postBilling(){
		$token = Input::get('stripeToken');
		Auth::user()->subscription('monthly')->create($token);
		return 'Done';
	}
}

