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
    return view('welcome');
});


//Área de autenticação

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Área de registro
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Área comum

Route::group(['middleware'=>'auth'], function(){
	//Área home do usuário
    Route::get('home', ['as'=>'home', 'uses'=>'ProfileController@index']);
    //Área de busca
    Route::get('busca', ['as'=>'search', 'uses'=>'ProfileController@search']);
});

// Área deslogado

Route::group(['middleware'=>'guest'], function(){
	Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
});