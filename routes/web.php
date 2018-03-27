<?php

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/data', 'HomeController@data');

Route::prefix('admin')->group(function () {
  Route::get('/','StadiumController@edit');
  Route::post('/edit','StadiumController@update');
  Route::get('/create', 'StadiumController@create');
  Route::post('/create','StadiumController@store');

  Route::get("/add_dish","StadiumController@addDish");
  Route::get("/add_pic","StadiumController@addPic");
});
