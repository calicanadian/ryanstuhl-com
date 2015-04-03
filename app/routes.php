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
Route::any('/', array('as' => '/', 'uses' => 'HomeController@showHome'));
Route::get('/', 'HomeController@showHome');
Route::get('/process', function()
{
	return View::make('experience');
});
Route::post('/contact', 'ContactController@getContactUsForm');