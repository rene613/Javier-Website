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

Route::get('/hello', function()
{
	return View::make('hello');
});

// ->with gives the page the variable $page and value about/index/conact etc.
Route::get('/index', function(){		return View::make('index')->with('page', 'index');});
Route::get('/about', function(){		return View::make('about')->with('page', 'about');});
//Route::get('/contact', function(){		return View::make('contact')->with('page', 'contact');});
Route::get('extra', 'extraController@getForm');
Route::get('/services', function(){		return View::make('services')->with('page', 'services');});
Route::get('/projects', function(){		return View::make('projects')
	->with('page', 'projects')
	->with('count', 0);
});
Route::get('/licenses', function(){		return View::make('licenses')->with('page', 'licenses');});
Route::get('/energy', function(){		return View::make('energy')->with('page', 'energy');});
Route::get('/environmental', function(){	return View::make('environmental')->with('page', 'environmental');});
Route::get('/civil', function(){		return View::make('civil')->with('page', 'civil');});
Route::get('/expert', function(){		return View::make('expert')->with('page', 'expert');});
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

