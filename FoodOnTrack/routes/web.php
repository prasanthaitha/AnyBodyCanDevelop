<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/search','SearchController@search');

Route::get('/home', 'HomeController@index');
Route::get('/search/{stn_id}','SearchController@station');
Route::get('/rest/{rest_id}','SearchController@restaur');
Route::post('/order','RestaurantController@book');
Route::post('/booking','CustomerController@placed');


Route::post('/book','CustomerController@test');
