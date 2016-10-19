<?php 
Route::resource('/tafsirs','TafsirsPublicController');
Route::get('/listtafsirs','TafsirsPublicController@listtafsirs');