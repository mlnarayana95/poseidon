<?php

Route::group(['module' => 'Amenity', 'middleware' => ['api'], 'namespace' => 'App\Modules\Amenity\Controllers'], function() {

    Route::resource('Amenity', 'AmenityController');

});
