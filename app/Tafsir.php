<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;
use App\Surah;

class Tafsir extends Model
{
    use ElasticquentTrait;
    protected $fillable = ['surat_id','ayat_id','tafsir'];
    public static function valid(){
    	return array(
    		'ayat_id'=>'required',
    		'tafsir'=>'required'
    		);
    }
    public function Surah(){
    	return $this->belongsTo('App\Surah','surat_id');
    }
}
