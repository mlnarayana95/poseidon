<?php

Route::group(['module' => 'Room', 'middleware' => ['web','auth','admin'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Room\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('room', 'RoomController');
    });

});
