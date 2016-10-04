<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Word;

class SearchController extends Controller
{
    public function index(Request $request)

    {
    	$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
		$stemmer  = $stemmerFactory->createStemmer();
    	if($request->has('search')){

    		$output = $stemmer->stem($request->input('search'));

    	}
    	return view('public/search.index',compact('output'));

    }
    
}
