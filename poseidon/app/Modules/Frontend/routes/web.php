<?php

Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::get('/', 'HomeController@index');
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@sendMail');
    Route::get('about', 'AboutController@index');
    Route::get('room', 'RoomController@index');
    Route::get('faq','FaqController@index');
});
