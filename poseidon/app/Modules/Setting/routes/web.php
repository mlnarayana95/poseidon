<?php

Route::group(['module' => 'Amenity', 'middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Setting\Controllers'], function() {

    Route::get('settings', 'SettingController@index')->name('admin.setting.index');
    Route::put('settings', 'SettingController@update')->name('admin.setting.update');

});
