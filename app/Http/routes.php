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
Route::get('/',["middleware" =>"auth" , "uses" => 'mainController@home']);
Route::get('reports',['middleware' => 'auth', 'uses' =>  'mainController@index']);// si esta autenticado no puede acceder
Route::get('reports/create', ["middleware" => "auth" , "uses" => 'mainController@create']);// si esta autenticado no puede acceder
Route::post('reports/store', 'mainController@store');


Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



