<?php

Route::group(['module' => 'Frontend', 'middleware' => ['api'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::resource('Frontend', 'FrontendController');

});
