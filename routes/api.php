<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function() {
    Route::prefix('competidores')->group(function() {
        Route::get('/', 'CompetitorsController@index')->name('competidores');
        Route::get('/{id}', 'CompetitorsController@show')->name('single_competitor');

        Route::post('/', 'CompetitorsController@store')->name('store_competitor');

        Route::put('/{id}', 'CompetitorsController@update')->name('store_competitor');

        Route::delete('/{id}', 'CompetitorsController@delete')->name('delete_competitor');
    });
});
