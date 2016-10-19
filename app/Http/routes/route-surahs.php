<?php 
Route::resource('/surahs','SurahsPublicController');
Route::get('/listsurahs','SurahsPublicController@listsurahs');