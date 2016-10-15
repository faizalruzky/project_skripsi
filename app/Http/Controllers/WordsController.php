<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use Session;
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
    	Word::create($request->all());
    	Session::flash('notice','Kata dasar has been created successfully.');
        return redirect('administrator/words');
    	
    }
     public function show($id)
    {
       // $word = Word::findOrFail($id)->paginate(50);       
       // //dd(get_class($qurans));
       //  return view('dashboard/words.show', compact('word'));
    }
    public function edit($id)
    {
        $word = Word::findOrFail($id);
        return view('dashboard/words.edit', compact('word'));
    }
    public function update(Request $request, $id)
    {
         $word = Word::findOrFail($id);
        $word->update($request->all());
        Session::flash('notice','Kata dasar has been updated successfully.');
        return redirect('administrator/words');
    }
    public function destroy($id)
    {
         $word = Word::findOrFail($id);
        $word->delete();
        Session::flash('notice','Surah has been deleted successfully.');
        return redirect('administrator/words');
    }   
}
