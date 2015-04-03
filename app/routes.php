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
Route::get('/indexdata', function()
{
	$services = Service::all();
	return View::make('indexdata')->with('services', $services);
});

Route::get('/subservice', function(){

	$service_id = Input::get('service_id');
	$subServices = subservice::where('service_id', '=', $service_id)->get();
	return Response::json($subServices);
});

// ->with gives the page the variable $page and value about/index/conact etc.
Route::get('/index', function(){		return View::make('index')->with('page', 'index');});
Route::get('/about', function(){		return View::make('about')->with('page', 'about');});
//Route::get('/contact', function(){		return View::make('contact')->with('page', 'contact');});
Route::get('extra', 'extraController@getForm');
Route::get('/services', function(){		return View::make('services')
	->with('page', 'services')
	->with('services', DB::select('select * from services'));
});
	
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Route::get('admin', 'AdminController@getForm');
Route::post('create', 'AdminController@getForm');
Route::post('update', 'AdminController@getForm');

// All service pages
Route::get('/{service}', function($service){
	if ($service == 'projects' || 'licenses' || 'energy' || 'environmental' || 'civil' || 'expert') {
		return View::make('subServices')
		->with('page', $service);
	}
});