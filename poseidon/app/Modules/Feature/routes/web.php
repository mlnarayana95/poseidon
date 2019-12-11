<?php

Route::group(['module' => 'Feature', 'middleware' => ['web','auth','admin'], 'prefix' => 'admin', 'namespace' => 'App\Modules\Feature\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('feature', 'FeatureController');
    });

});
