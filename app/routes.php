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
	return View::make('home');
});

//getting kaya
Route::get('kaya',array('uses'=>'kayaController@index'));

//getting regions
Route::get('regions',array('uses'=>'kayaController@getRegions'));

//getting Districts
Route::get('districts',array('uses'=>'kayaController@getDistricts'));

//adding new kaya
Route::post('kaya',array('uses'=>'kayaController@store'));

//updating kaya
Route::post('kaya/{id}',array('uses'=>'kayaController@update'));

//deleting kaya
Route::post('kaya/delete/{id}',array('uses'=>'kayaController@destroy'));


