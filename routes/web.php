<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
  Route::get('/','StadiumController@edit');
  Route::post('/edit','StadiumController@update');
  Route::get('/create', 'StadiumController@create');
  Route::post('/create','StadiumController@store');

});
