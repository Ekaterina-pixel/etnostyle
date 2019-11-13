<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@postIndex');
Route::get('/','MaintextController@mains');
Route::get('{url}', 'MaintextController@getIndex');

