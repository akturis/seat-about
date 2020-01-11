<?php

Route::group([
    'namespace' => 'Seat\Akturis\About\Http\Controllers',
    'middleware' => ['web', 'auth'],
    'prefix' => 'about',
], function() {

    Route::get('/about', [
        'as' => 'about.view',
        'uses' => 'AboutController@index',
        'middleware' => 'bouncer:akturis_about_about',
    ]);

});
