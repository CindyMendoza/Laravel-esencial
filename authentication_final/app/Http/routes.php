<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$user_name = Auth::check() ? Auth::user()->name : null;
	//dd($user_name);
    return view('foundation', [ 'name' => $user_name ]);
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/cms', function () {
	if( !Auth::check() )
		return redirect('auth/login');
	return view('cms');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/logout', function()
	{
		Auth::logout();
		return redirect('/');
	});
