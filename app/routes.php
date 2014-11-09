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


//Home
Route::get('/',array('before'=>'auth','uses'=>'HomeController@getHome'));

/*-------------Form authentication------------------*/
//login
Route::get('/login',array('uses'=>'UserController@getLogin'));
Route::post('/login',array('uses'=>'UserController@postLogin'));

//register
Route::get('/register',array('uses'=>'UserController@getRegister'));
Route::post('/register',array('uses'=>'UserController@postRegister'));

//logout 
Route::get('logout',array('uses'=>'UserController@getLogout'));


//password remind
Route::get('/password/remind',array('uses'=>'RemindersController@getRemind','as'=>'password.remind'));
Route::post('/password/remind',array('uses'=>'RemindersController@postRemind'));

//reset password 
Route::get('/password/reset/{token}',array('uses'=>'RemindersController@getReset'));
Route::post('/password/reset/{token}',array('uses'=>'RemindersController@postReset'));


//billing - cashier 
Route::get('/billing',array('uses'=>'BillingController@getBilling'));
Route::post('/billing',array('uses'=>'BillingController@postBilling'));

Route::get('/upgrade',array('uses'=>'BillingController@upgrade'));
Route::get('/cancel',array('uses'=>'BillingController@cancel'));

Route::get('/getdata',array('uses'=>'HomeController@getProductList'));

