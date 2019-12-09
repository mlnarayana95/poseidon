<?php

Route::group(['module' => 'Booking', 'prefix' => 'admin', 'middleware' => ['web'], 'namespace' => 'App\Modules\Booking\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('booking', 'BookingController');
    });

});
