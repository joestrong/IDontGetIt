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

Route::controller('users', 'UserController');

Route::get('jokes/create', array('before' => 'auth', 'uses' => 'JokeController@getCreate'));
Route::post('jokes/create', array('before' => 'auth', 'uses' => 'JokeController@postCreate'));