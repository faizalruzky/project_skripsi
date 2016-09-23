<?php 
Route::auth();
Route::get('/administrator', 'HomeController@index');