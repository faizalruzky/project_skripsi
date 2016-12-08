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
use App\Tafsir;
use DB;


class SearchController extends Controller
{
    public function index(Request $request)

    {
    	$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
		$stemmer  = $stemmerFactory->createStemmer();
        $stopWordRemover = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopWords  = $stopWordRemover->createStopWordRemover();
        $dictionary = $stemmerFactory->createDefaultDictionary();
        foreach ($db = Word::Where('id') as $kata) {
            $dictionary->add($kata);
        }
        // $stopWords->remove('kepada');
        //  $stopWords->remove('untuk');
       $stemmer = new \Sastrawi\Stemmer\Stemmer($dictionary);
        // $output = $stemmer->stem('beriman kepada allah dan hari akhir untuk'); 
        //  var_dump($output = $stopWords->remove('beriman kepada allah dan hari akhir untuk')); 
    	if($request->has('search')){

    		$output = $stemmer->stem($request->input('search'));
            $output = $stopWords->remove($request->input('search'));
    		$qurans = Quran::search($output)->toArray();
             $num_rows = count($qurans);            
             $tafsir = Tafsir::where('tafsir_id');
    	}
        
    	return view('public/search.index',compact('qurans','num_rows','tafsir'));
    	// return view('public/search.index')->with('qurans',$qurans);
     //    ->with('surah',$surah);
    }
}
