<?php 
Route::get('/','SearchController@index');
Route::get('stopword',function(){
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();

$dictionary = $stemmerFactory->createDefaultDictionary();
$dictionary->add('internet');
$dictionary->remove('desa');

$stemmer = new \Sastrawi\Stemmer\Stemmer($dictionary);

var_dump($stemmer->stem('pedesaan')); //internet
});

