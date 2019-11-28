<?php

Route::group(['module' => 'Hotel', 'middleware' => ['web'], 'namespace' => 'App\Modules\Hotel\Controllers'], function() {

    Route::resource('Hotel', 'HotelController');

});
