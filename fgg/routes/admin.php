<?php

Route::get('/', 'IndexController@index')->name('admin');

Route::get('/login', 'IndexController@login');
Route::any('/logout', 'IndexController@logout');