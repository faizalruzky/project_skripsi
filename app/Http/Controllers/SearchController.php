<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use App\Word;
use App\Quran;
use App\Surah;
use App\Tfidf;
use DB;


class SearchController extends Controller
{
    public function index(Request $request)

    {
    	$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
		$stemmer  = $stemmerFactory->createStemmer();
        $dictionary = $stemmerFactory->createDefaultDictionary();
        foreach ($db = Word::Where('id') as $kata) {
            $dictionary->add($kata);
        }
       $stemmer = new \Sastrawi\Stemmer\Stemmer($dictionary);
        // var_dump($output = $stemmer->stem('internetan')); 
    	if($request->has('search')){

    		$output = $stemmer->stem($request->input('search'));
    		$qurans = Quran::search($output)->toArray();
             $num_rows = count($qurans);            

    	}
    	return view('public/search.index',compact('qurans','num_rows'));
    	// return view('public/search.index')->with('qurans',$qurans);
     //    ->with('surah',$surah);
    }
}
