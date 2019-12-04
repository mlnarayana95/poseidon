<?php

Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::get('/', 'HomeController@index');
    Route::get('contact', 'ContactController@index');
    Route::get('about', 'AboutController@index');
    Route::get('room', 'RoomController@index');
    Route::get('faq','FaqController@index');
    Route::get('profile','ProfileController@show')->name('profile');
    Route::get('update_profile','profileController@load')->name('update');
    Route::post('update_profile','profileController@load')->name('update');
});
