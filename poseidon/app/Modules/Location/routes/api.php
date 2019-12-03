<?php

Route::group(['module' => 'Location', 'middleware' => ['api'], 'namespace' => 'App\Modules\Location\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('location', 'LocationController');
    });

});
