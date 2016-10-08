<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;
use App\Quran;

class Tfidf extends Model
{
     use ElasticquentTrait;
     protected $fillable = ['term','quran_id','idf','w'];
     public function Quran(){
    	return $this->belongsTo('App\Quran','quran_id');
    }
}
