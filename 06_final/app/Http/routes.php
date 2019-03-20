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
    return view('foundation');
});

Route::get('articles', 'ArticlesController@index');

//Route::controller('articles', 'ArticlesController');

Route::get('create_user', ['uses' => 'ArticlesController@create',  'as' => 'create' ]);

Route::resource('users', 'UsersController');