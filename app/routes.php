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

/*Route::get('/', function()
{
	return View::make('hello');
});

Route::filter('auth.basic', function()
{
    return Auth::basic();
});

Route::filter('basic.once', function()
{
    return Auth::onceBasic();
});*/





/*------------- HTTP Basic Authentication------------------*/
//login
Route::get('/basicauth',array('before'=>'auth.basic','uses'=>'HomeController@getBasicAuth'));


/*-------------Form authentication------------------*/
//login
Route::get('/login',array('uses'=>'HomeController@showLogin'));
Route::post('/login',array('uses'=>'HomeController@doLogin'));

//register
Route::get('/register',array('uses'=>'HomeController@showRegister'));
Route::post('/register',array('uses'=>'HomeController@doRegister'));

//logout 
Route::get('logout',array('uses'=>'HomeController@doLogout'));

//top
Route::get('/',array('before'=>'auth','uses'=>'HomeController@getTop'));

//profile 
Route::get('/editprofile',array('before'=>'auth','uses'=>'HomeController@showEditProfile'));

//password remind
Route::get('/password/remind',array('uses'=>'RemindersController@getRemind','as'=>'password.remind'));
Route::post('/password/remind',array('uses'=>'RemindersController@postRemind'));

//reset password 
Route::get('/password/reset/{token}',array('uses'=>'RemindersController@getReset'));
Route::post('/password/reset/{token}',array('uses'=>'RemindersController@postReset'));

Route::get('/temp',array('uses'=>'HomeController@temp'));

//billing - cashier 
Route::get('/billing',array('uses'=>'BillingController@getBilling'));
Route::post('/billing',array('uses'=>'BillingController@postBilling'));

Route::get('/upgrade',array('uses'=>'BillingController@upgrade'));
Route::get('/cancel',array('uses'=>'BillingController@cancel'));

Route::get('/getdata',array('uses'=>'HomeController@getProductList'));

