<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'IndexController@getIndex');

Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin');

Route::get('logout', 'UserController@getLogout');

Route::get('register', 'UserController@getRegister');
Route::post('register', 'UserController@postRegister');

Route::get('jokes/create', array('before' => 'auth', 'uses' => 'JokeController@getCreate'));
Route::post('jokes/create', array('before' => 'auth', 'uses' => 'JokeController@postCreate'));