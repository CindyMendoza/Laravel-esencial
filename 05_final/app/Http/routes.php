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
    //return 'Curso Laravel';
    return view('foundation');
});

Route::get('/form', function()
{

	return view('form');

});

Route::post('/form', function()
{
	return 'Cargando mediante post';
});


Route::get('articles', 'ArticlesController@index');

Route::get('greet/{name}', function($name){
	return 'Hola ' . $name;
});

Route::get('redirect', function(){
	return Redirect::to('/');
});

Route::get('user/profile', array('as' => 'profile'), function(){
	return 'Ruta nombrada';
} );

Route::get('get/named_url', function(){
	return URL::route('profile');
});
