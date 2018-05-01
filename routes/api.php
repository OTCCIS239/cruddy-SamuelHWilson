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

Route::group([
    'namespace' => 'Api',
], function() {
    Route::get('tracks/list/', 'TracksController@index');
    Route::get('artists/list/{type}', 'ArtistsController@index');
    Route::get('labels/list/{type}', 'LabelsController@index');
    Route::get('labels/show/{id}', 'LabelsController@show');        
    Route::post('labels/store/', 'LabelsController@store');
    Route::get('collections/list/{type}', 'CollectionsController@index');
    Route::get('characteristics/list/{type}', 'CharacteristicsController@index');
});