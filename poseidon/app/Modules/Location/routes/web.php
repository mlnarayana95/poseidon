<?php

Route::group(['module' => 'Location', 'middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Destination\Controllers'], function() {

    Route::resource('location', 'DestinationController');

});
