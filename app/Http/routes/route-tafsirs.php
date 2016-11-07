<?php 
Route::resource('/tafsirs','TafsirsPublicController');
Route::get('/listtafsirs','TafsirsPublicController@listtafsirs');
Route::get('/listjalalayn','TafsirsPublicController@listjalalayn');
Route::get('/jalalayn','TafsirsPublicController@jalalayn');
Route::get('/jalalayn/{id}','TafsirsPublicController@showjalalayn');