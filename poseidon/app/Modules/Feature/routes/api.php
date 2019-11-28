<?php

Route::group(['module' => 'Feature', 'middleware' => ['api'], 'namespace' => 'App\Modules\Feature\Controllers'], function() {

    Route::resource('Feature', 'FeatureController');

});
