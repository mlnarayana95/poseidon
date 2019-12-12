<?php

Route::group(['module' => 'Hotel', 'route' => 'admin.', 'middleware' => ['web','auth'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Hotel\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('hotel', 'HotelController');
    });

});
