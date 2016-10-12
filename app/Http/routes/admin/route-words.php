<?php 
Route::resource('administrator/words','WordsController');
Route::post('/','SearchController@index');
Route::resource('/stemmer','StemmerController');
