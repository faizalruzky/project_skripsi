<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use App\Word;
use App\Quran;
use App\Surah;
use DB;

class SearchController extends Controller
{
    public function index(Request $request)

    {
    	$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
		$stemmer  = $stemmerFactory->createStemmer();
		$dictionary = $stemmerFactory->createDefaultDictionary();
		// $db = new Word();
		// foreach ($db->query('SELECT katadasar FROM words') as $word) {
		// 	$dictionary->add($word);
		// }
    
    	$stemmer = new \Sastrawi\Stemmer\Stemmer($dictionary);
    	if($request->has('search')){

    		$output = $stemmer->stem($request->input('search'));
            // $surah = $request->id;
            // $surah = Surah::Where('id');      
    		$qurans = Quran::search($output)->toArray();

    	}

    	return view('public/search.index',compact('qurans','output'));
    	// return view('public/search.index')->with('qurans',$qurans);
     //    ->with('surah',$surah);
    }
    public function create()
    {
    	
    	return view('dashboard/words.create');
    }
    
    public function store(Request $request)
    {
    	$db = new Word();
    	$db->katadasar=$request->katadasar;
    	$db->save();
    	
    }
}
