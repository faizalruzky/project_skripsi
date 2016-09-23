<?php 
Route::get('/administrator/login','Auth\AuthController@showLoginForm');
Route::post('/administrator/login','Auth\AuthController@login');
