<?php

Route::group(['module' => 'Destination', 'middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Destination\Controllers'], function() {

    Route::resource('destination', 'DestinationController');

});
