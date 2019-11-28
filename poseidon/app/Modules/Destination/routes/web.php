<?php

Route::group(['module' => 'Destination', 'middleware' => ['web'], 'namespace' => 'App\Modules\Destination\Controllers'], function() {

    Route::resource('Destination', 'DestinationController');

});
