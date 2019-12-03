<?php

Route::group(['module' => 'Booking', 'middleware' => ['api'], 'namespace' => 'App\Modules\Booking\Controllers'], function() {

    Route::resource('Booking', 'BookingController');

});
