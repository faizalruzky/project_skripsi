<?php 
Route::get('/administrator/password/reset/{token?}','Auth\PasswordController@showResetForm');
Route::post('/administrator/password/email','Auth\PasswordController@sendResetLinkEmail');
Route::post('/administrator/password/reset','Auth\PasswordController@reset');