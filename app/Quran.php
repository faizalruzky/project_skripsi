<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Surah;

class Quran extends Model
{
    protected $fillable = ['surat_id','ayat_id','text_quran','terjemah','tafsir_id'];
    public static function valid(){
    	return array(
    		'ayat_id'=>'required',
    		'text_quran'=>'required',
    		'terjemah'=>'required'
    		);
    }
    public function Surah(){
    	return $this->belongsTo('App\Surah','surat_id');
    }
}
