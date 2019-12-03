<?php

Route::group(['module' => 'Destination', 'middleware' => ['api'], 'namespace' => 'App\Modules\Destination\Controllers'], function() {

    Route::resource('Destination', 'DestinationController');

});
