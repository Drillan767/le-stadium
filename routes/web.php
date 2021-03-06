<?php

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/data', 'HomeController@data');
Route::post('/contact', 'HomeController@sendContact');

Route::prefix('admin')->group(function () {
  Route::get('/','StadiumController@edit');
  Route::post('/edit','StadiumController@update');
  Route::get('/create', 'StadiumController@create');
  Route::post('/create','StadiumController@store');
  Route::post('/gallery/delete/{id}',"StadiumController@removeFromGallery");
});