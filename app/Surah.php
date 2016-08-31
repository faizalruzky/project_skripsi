<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quran;

class Surah extends Model
{
	protected $fillable = ['nama_surat',];
	public static function valid($id=''){
		return array(
			'surah_name'=>'|min:4|unique:surahs,nama_surat'.($id ? ",$id" : '')
			);
	}
	public function qurans(){
		return $this->hasMany('App\Quran','surat_id');
	}
	
}
