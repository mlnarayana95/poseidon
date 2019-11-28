<?php

Route::group(['module' => 'Hotel', 'middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Hotel\Controllers'], function() {

    Route::resource('hotel', 'HotelController');

});
