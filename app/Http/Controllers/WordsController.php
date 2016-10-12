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

class WordsController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	} 
	public function index(){
		$words = Word::orderBy('id')->paginate(50);
		return view('dashboard/words.index')->with('words',$words);
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
