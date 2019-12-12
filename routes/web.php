<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@postIndex');
Route::get('/','MaintextController@mains');
Route::get('/catalog','CatalogController@getIndex');
Route::get('{url}', 'MaintextController@getIndex');

