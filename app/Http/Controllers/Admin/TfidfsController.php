<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
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
        }
        
        return view('dashboard/tfidfs.index',compact('freq','n','resBobot','num_rows','w','tfidf'));
    }
    public function weight (){
        while($resBobot) {
            //$w = tf * log (n/N)
                $term = $freq;
                $tf = new Tfidf();      
                $tf = $resBobot['idf'];
                $id = $resBobot['id'];

            //berapa jumlah dokumen yang mengandung term tersebut?, N
                $rowNTerm = DB::table('tfidfs')->select('idf')->where('term', '=', $term)->get();
                $NTerm = $rowNTerm->idf;
                $w = $tf * log($n/$NTerm);
                $resUpdateBobot = Tfidf::where('id','=','$id');
                $resUpdateBobot->update();  
            }
            $resBobot->toArray();
    }
      public function weightedtree($tree_terjemah, $tree_tafsir) {
        $alldoc = $this->quran_model->view_all_doc();
        $arraycos = array();
        // $arraytanim = array();
        $arraybtwc = array();
        $i = 0;
        $j = 0;
        $k = 0;
        foreach ($alldoc->result() as $val):

            // $tree_surat = unserialize($val->tree_surat);
            $tree_terjemah = unserialize($val->tree_terjemah);
            $tree_tafsir = unserialize($val->tree_tafsir);
           
            $bterjemah = $this->cosine($tree_terjemah, $tree_keyterjemah);
            $bkey = $this->cosine($tree_keyword, $tree_keyterjemah);
            $btaf = $this->cosine($tree_tafsir, $tree_keytaf);

         
           (real) $sim = $bterjemah[0] * 0.5 + $bkey[0] * 0.5 + $btaf[0] * 0.5;
           
           (real) $simbtwc = $bterjemah[1] * 0.5 + $bkey[1] * 0.5 + $btaf[1] * 0.5;
            
      
            
            if ($simcos != 0 && $simcos != ($simcos>0.25)) {
                $arraycos[$i]['sim'] = $simcos;
                $arraycos[$i]['id'] = $val->id_quran;
                $i++;
            }
            
            if ($simbtwc != 0 && $simbtwc != (sqrt($simbtwc*$simbtwc)>0.01)) {
                $arraybtwc[$k]['sim'] = sqrt($simbtwc*$simbtwc);
                $arraybtwc[$k]['id'] = $val->id_quran;
                $k++;
            }
            
        endforeach;
        
        $arrayhasil = array($arraycos,$arraybtwc);
        
        return $arrayhasil;
    }
}
