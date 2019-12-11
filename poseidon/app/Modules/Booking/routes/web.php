<?php

Route::group(['module' => 'Booking', 'prefix' => 'admin', 'middleware' => ['web','auth','admin'], 'namespace' => 'App\Modules\Booking\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('booking', 'BookingController');
    });

});
