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

Route::get('admin', ['as' => 'admin', function()
{
	return View::make('admin.hello');
}])->before('auth');

Route::get('login', ['as'=>'login', 'uses'=>'SessionsController@create']);
Route::get('logout', ['as'=>'logout', 'uses'=>'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only'=> ['index', 'create', 'destroy']]);