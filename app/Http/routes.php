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

Route::get('controlador', 'PruebaController@index');

Route::resource('movie', 'MovieController');

Route::get('prueba', function() {
	return "Hello World!";
});

Route::get('nombre/{nombre}', function($nombre) {
	return 'Mi nombre es: ' . $nombre;
});

Route::get('/', function () {
    return view('welcome');
});
