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

    Route::get('friends', ['as'=>'friends', 'uses'=>'FriendsController@index']);

    Route::get('addFriend/{id}', ['as'=>'addFriend', 'uses'=>'FriendsController@addFriend']);

    Route::get('acceptFriend/{id}', ['as'=>'acceptFriend', 'uses'=>'FriendsController@acceptFriend']);

    Route::get('rejectFriend/{id}', ['as'=>'rejectFriend', 'uses'=>'FriendsController@rejectFriend']);

    Route::get('edit', ['as'=>'profile.edit', 'uses'=>'ProfileController@edit']);

    Route::get('edit/avatar/delete', ['as'=>'edit.avatar.delete', 'uses'=>'ProfileController@removeAvatar']);

    Route::post('edit/avatar', ['as'=>'profile.edit.avatar', 'uses'=>'ProfileController@editAvatar']);

    Route::get('students',['as'=>'students', 'uses'=>'StudentController@show']);

    Route::get('addStudent/{id}',['as'=>'addStudent', 'uses'=>'StudentController@add']);

    Route::get('myAdvisor',['as'=>'myAdvisor', 'uses'=>'AdvisorController@show']);

    //Rotas de imagens

    Route::group(['prefix'=>'images'], function(){
        Route::group(['prefix'=>'avatar'], function(){
            Route::get('{id}', function($id){
                $image = Image::make(storage_path().'/users/'.$id.'/'.'avatar.jpg');
                return $image->response();
            });
        });
    });

});

// Área deslogado

Route::group(['middleware'=>'guest'], function(){
	Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
});