<?php

Route::group(['module' => 'Admin', 'middleware' => ['api'], 'namespace' => 'App\Modules\Admin\Controllers'], function() {

    Route::resource('Admin', 'AdminController');

});
