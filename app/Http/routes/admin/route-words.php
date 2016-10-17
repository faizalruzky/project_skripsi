<?php 
Route::resource('administrator/words','Admin\WordsController');
Route::post('/','SearchController@index');
Route::resource('/stemmer','StemmerController');
