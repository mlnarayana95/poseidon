<?php

Route::group(['module' => 'User', 'middleware' => ['web','auth','admin'], 'prefix' => 'admin', 'namespace' => 'App\Modules\User\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('user', 'UserController');
    });

});
