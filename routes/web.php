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
    return redirect('/tracks');
});

Route::resource('tracks', 'TracksController');
Route::resource('collections', 'CollectionsController');
Route::resource('artists', 'ArtistsController');
Route::resource('labels', 'LabelsController');
Route::resource('characteristics', 'CharacteristicsController');
