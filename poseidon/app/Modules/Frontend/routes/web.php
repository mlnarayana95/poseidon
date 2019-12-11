<?php

Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::get('/', 'HomeController@index');

    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@sendMail');

    Route::get('about', 'AboutController@index');
    Route::get('faq','FaqController@index');

    Route::get('room', 'RoomController@index');
    Route::get('room/{id}', 'RoomController@show');
    Route::post('search', 'RoomController@search');

    Route::get('hotels', 'HotelController@index');
    Route::get('hotel/{slug}', 'HotelController@show');

    Route::get('booking','BookingController@index');
    Route::post('booking','BookingController@save');
});

Route::group(['module' => 'Frontend', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::get('profile','ProfileController@show')->name('profile');
    Route::get('update_profile','profileController@load')->name('update');
    Route::post('update_profile','profileController@update')->name('update');

    Route::get('/profile/bookings','BookingController@show');

});
