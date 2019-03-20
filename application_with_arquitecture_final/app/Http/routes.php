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

Route::get('/', 'ClientController@index');
Route::get('client/create', 'ClientController@create');
Route::post('client/create', 'ClientController@store');
Route::get('client/{id}', 'ClientController@show');
Route::post('client/{id}', 'ClientController@update');
Route::get('client/destroy/{id}', 'ClientController@destroy');
