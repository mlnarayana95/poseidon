<?php

Route::group(['module' => 'Room', 'middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Room\Controllers'], function() {

    Route::resource('room', 'RoomController');

});
