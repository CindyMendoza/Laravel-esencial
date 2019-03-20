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
	$clientObject = new App\Client;
	$clients = $clientObject->client_container;
    return view('index', [ 'clients' => $clients ]);
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/details', function () {
	Input::flash();
	return view('cms');
});

Route::post('/details', function () {
	return view('cms', ['post' => true]	);
});

Route::get('/add', function () {
	Input::flash();
	return view('cms', ['name' => 'Brr']);
});

Route::post('/add', function () {
	Input::flash();
	return view('cms', ['post' => true]);
});

