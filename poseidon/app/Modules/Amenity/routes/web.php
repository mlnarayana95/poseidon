<?php

Route::group(['module' => 'Amenity', 'middleware' => ['web','auth','admin'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Amenity\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('amenity', 'AmenityController');
    });

});
