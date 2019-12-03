<?php

Route::group(['module' => 'Customer', 'middleware' => ['api'], 'namespace' => 'App\Modules\Customer\Controllers'], function() {

    Route::resource('Customer', 'CustomerController');

});
