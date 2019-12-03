<?php

Route::group(['module' => 'Service', 'middleware' => ['web'], 'namespace' => 'App\Modules\Service\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('service', 'ServiceController');
    });

});
