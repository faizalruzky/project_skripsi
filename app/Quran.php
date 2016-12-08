<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;
use App\Surah;
use App\Tfidf;

class Quran extends Model
{
    use ElasticquentTrait;
    protected $fillable = ['surat_id','nama_surat','arab_surat','ayat_id','text_quran','terjemah','tafsir_id'];
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
    public function tfidf(){
        return $this->hasMany('App\Tfidf','quran_id');
    }
}
