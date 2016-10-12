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

class TfidfsController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	} 
    public function hitung(Request $request) 
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();
        $dictionary = $stemmerFactory->createDefaultDictionary();

        $stemmer = new \Sastrawi\Stemmer\Stemmer($dictionary);
        // var_dump($output = $stemmer->stem('internetan'));
        $tfidf = Tfidf::all();
         $tfidf->addToIndex(); 
          $n = Tfidf::count('quran_id');
        if($request->has('search')){

            $output = $stemmer->stem($request->input('search'));
            
              
            $freq = Tfidf::search($output)->toArray();
            $num_rows = count($freq); 
         
         

           
            // while($resBobot) {
            // //$w = tf * log (n/N)
            //     $term = $freq;
            //     $tf = new Tfidf();      
            //     $tf = $resBobot['idf'];
            //     $id = $resBobot['id'];

            // //berapa jumlah dokumen yang mengandung term tersebut?, N
            //     $rowNTerm = DB::table('tfidfs')->select('idf')->where('term', '=', $term)->get();
            //     $NTerm = $rowNTerm->idf;
            //     $w = $tf * log($n/$NTerm);
            //     $resUpdateBobot = Tfidf::where('id','=','$id');
            //     $resUpdateBobot->update();  
            // }
            // $resBobot->toArray();
        }
        
        return view('public/tfidf.index',compact('freq','n','resBobot','num_rows','w','tfidf'));
    }
}
