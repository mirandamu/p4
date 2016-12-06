<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trips', 'TripController@index')->name('trips.index')->middleware('auth');
Route::get('/trips/create', 'TripController@create')->name('trips.create')->middleware('auth');
Route::post('/trips', 'TripController@store')->name('trips.store')->middleware('auth');
Route::get('/trips/{trip}', 'TripController@show')->name('trips.show')->middleware('auth');
Route::get('/trips/{trip}/edit', 'TripController@edit')->name('trips.edit')->middleware('auth');
Route::put('/trips/{trip}', 'TripController@update')->name('trips.update')->middleware('auth');
Route::delete('/trips/{trip}', 'TripController@destroy')->name('trips.destroy')->middleware('auth');

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');



