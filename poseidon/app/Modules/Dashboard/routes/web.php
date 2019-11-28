<?php

Route::group(['module' => 'Admin', 'middleware' => ['web'], 'prefix'=>'admin', 'namespace' => 'App\Modules\Dashboard\Controllers'], function() {

    Route::get('dashboard', 'DashboardController@index');

});
