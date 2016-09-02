<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quran;

class Surah extends Model
{
	protected $fillable = ['nama_surat','arti_surat','arab_surat',];
	public static function valid($id=''){
		return array(
			'nama_surat'=>'|min:4|unique:surahs,nama_surat'.($id ? ",$id" : ''),
			'arab_surat'=>'required',
			'arti_surat'=>'required'
			);
	}
	public function qurans(){
		return $this->hasMany('App\Quran','surat_id');
	}
	
}
