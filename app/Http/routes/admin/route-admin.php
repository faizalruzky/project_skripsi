<?php 
Route::auth();
Route::get('/administrator', 'Admin\HomeController@index');