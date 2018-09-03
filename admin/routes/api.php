<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', 'ItemController@index');
Route::get('item/{id}', 'ItemController@show');
Route::post('items', 'ItemController@store');
Route::put('items/{id}', 'ItemController@update');
Route::delete('items/{id}', 'ItemController@delete');

//static pages 
Route::get('pages', 'PageController@index');
Route::get('page/{id}', 'PageController@show');
Route::post('pages', 'PageController@store');
Route::put('pages/{id}', 'PageController@update');
Route::delete('pages/{id}', 'PageController@delete');

//menu
Route::get('menu', function()
{
	return menu('main', 'bootstrap');
});

//settings
Route::get('settings', 'SettingController@index');