<?php

Route::group(['module' => 'Customer', 'middleware' => ['web','auth','admin'],'prefix' => 'admin',  'namespace' => 'App\Modules\Customer\Controllers'], function() {

    Route::name('admin.')->group(function () {
        Route::resource('customer', 'CustomerController');
    });

});
