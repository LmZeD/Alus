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

Route::get('/', [
    'uses' => 'TripController@getIndex',
    'as' => 'trip.index'
]);

Route::get('/results', [
    'uses' => 'TripController@makeATrip',
    'as' => 'trip.results'
]);

Route::get('/{any}', function () {
    return redirect()->route('trip.index');
})->where('any', '.*');
