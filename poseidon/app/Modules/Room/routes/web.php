<?php

Route::group(['module' => 'Room', 'middleware' => ['web'], 'namespace' => 'App\Modules\Room\Controllers'], function() {

    Route::resource('Room', 'RoomController');

});
