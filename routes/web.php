<?php

Auth::routes();

Route::get('/home', 'Home Controller@index')->name('home');
Route::get('/','MaintextController@mains');
Route::get('{url}', 'MaintextController@getIndex');
