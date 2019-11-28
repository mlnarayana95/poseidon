<?php

Route::group(['module' => 'User', 'middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'App\Modules\User\Controllers'], function() {

    Route::resource('user', 'UserController');

});
