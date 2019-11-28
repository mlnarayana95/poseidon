<?php

Route::group(['module' => 'Amenity', 'middleware' => ['web'], 'namespace' => 'App\Modules\Amenity\Controllers'], function() {

    Route::resource('Amenity', 'AmenityController');

});
