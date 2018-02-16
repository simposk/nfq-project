<?php

Route::get('/', 'PagesController@index');

Route::get('/orders', 'OrdersController@index');
Route::post('/orders', 'OrdersController@store');

Route::get('/orders/search', 'SearchController@show');