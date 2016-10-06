<?php 
Route::get('administrator/words/create','SearchController@create');
Route::post('/','SearchController@index');
Route::resource('/stemmer','StemmerController');
