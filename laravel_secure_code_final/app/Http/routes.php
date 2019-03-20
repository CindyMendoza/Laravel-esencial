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
    //return 'Vistas con Blade';
    $article = App\Article::first()->text;
    return view('foundation', [ 'injection_attempt' => $article ]);
});

Route::get('/price', function () {
    //return 'Vistas con Blade';
    return view('price');
});




