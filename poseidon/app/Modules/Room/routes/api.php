<?php

Route::group(['module' => 'Room', 'middleware' => ['api'], 'namespace' => 'App\Modules\Room\Controllers'], function() {

    Route::resource('Room', 'RoomController');

});
