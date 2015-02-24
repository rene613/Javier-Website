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
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

// All service pages
Route::get('/{service}', function($service){
	$services = array('projects' => 'projects', 'energy' => 'energy', 'licenses' => 'licenses', 'environmental' => 'environmental', 'civil' => 'civil', 'expert' => 'expert');		
	if (isset($services[$service])) {
		return View::make($service)
		->with('page', $service)
		// count is for alternating div styles in a loop.
		->with('count', 0);
	} else {
		return View::make('index')
		->with('page', 'extra');
	}
});