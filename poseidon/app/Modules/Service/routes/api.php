<?php

Route::group(['module' => 'Service', 'middleware' => ['api'], 'namespace' => 'App\Modules\Service\Controllers'], function() {

    Route::resource('Service', 'ServiceController');

});
