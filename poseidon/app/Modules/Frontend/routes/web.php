<?php

Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::get('/', 'HomeController@index');
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@sendMail');
    Route::get('about', 'AboutController@index');
    Route::get('room', 'RoomController@index');
    Route::get('payment', 'RoomController@payment');
    Route::get('faq','FaqController@index');
    Route::get('hotels', 'HotelController@index');
    Route::get('hotel/{slug}', 'HotelController@show');
    Route::get('profile','ProfileController@show')->name('profile');
    Route::get('update_profile','profileController@load')->name('update');
    Route::post('update_profile','profileController@update')->name('update');
});
