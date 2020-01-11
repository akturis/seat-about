<?php

Route::group([
    'namespace' => 'Seat\Akturis\About\Http\Controllers',
    'middleware' => ['web', 'auth'],
    'prefix' => 'about',
], function() {

    Route::get('/', [
        'as' => 'about.view',
        'uses' => 'AboutController@index'
    ]);

    Route::get('/settings', [
        'as' => 'about.settings',
        'uses' => 'SettingController@index',
        'middleware' => 'bouncer:akturis_about_about',
    ]);
    
    Route::post('/settings', [
        'as' => 'setting.info.update',
        'uses' => 'SettingController@updateInfo',
        'middleware' => 'bouncer:akturis_about_about',
    ]);
});
