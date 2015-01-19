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

//updating kaya distribution status
Route::post('kaya/{id}/distribute',array('uses'=>'kayaController@updateStatus'));

//getting single kaya Information
Route::get('kaya/{id}',array('uses'=>'kayaController@show'));

//deleting kaya
Route::post('kaya/delete/{id}',array('uses'=>'kayaController@destroy'));

//getting kaya for specific region
Route::get('kaya/region/{id}',array('uses'=>'kayaController@getregKaya'));

//getting kaya for specific district
Route::get('kaya/district/{id}',array('uses'=>'kayaController@getdisKaya'));

//getting districts for specific region
Route::get('districts/region/{id}',array('uses'=>'kayaController@getregDistricts'));

//getting people for specific region
Route::get('people/region/{id}',array('uses'=>'kayaController@getpeopleInRegion'));

//getting people for specific region
Route::get('people/district/{id}',array('uses'=>'kayaController@getpeopleInkaya'));

