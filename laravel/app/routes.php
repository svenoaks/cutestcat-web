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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', array('as' => 'login', function () { }))->before('guest');
Route::get('logout', array('as' => 'logout', function () { }))->before('auth');
Route::get('profile', array('as' => 'profile', function () { }))->before('auth');

Route::controller('users', 'UserController');
Route::resource('gallery', 'GalleryController');
