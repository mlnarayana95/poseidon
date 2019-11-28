<?php

Route::group(['module' => 'Hotel', 'middleware' => ['api'], 'namespace' => 'App\Modules\Hotel\Controllers'], function() {

    Route::resource('Hotel', 'HotelController');

});
