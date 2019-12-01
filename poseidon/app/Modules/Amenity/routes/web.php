<?php

Route::group(['module' => 'Amenity', 'middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Amenity\Controllers'], function() {

    Route::resource('amenity', 'AmenityController');

});
