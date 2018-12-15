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

Route::get('/guides', 'GuidesController@profile');

Route::get('/places', function () {
    return view('places');
});

Route::get('/restaurants', 'RestaurantsController@index');

Route::get('/accommodations', 'AccommodationsController@index');

Auth::routes();

