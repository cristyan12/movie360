<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/image', 'ImageController@index');

Route::post('/uploadImage', 'ImageController@uploadImage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
