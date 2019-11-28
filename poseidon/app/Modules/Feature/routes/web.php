<?php

Route::group(['module' => 'Feature', 'middleware' => ['web'], 'namespace' => 'App\Modules\Feature\Controllers'], function() {

    Route::resource('Feature', 'FeatureController');

});
