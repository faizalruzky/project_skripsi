<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Session;
use Validator;
use App\Http\Requests;
use App\Surah;
use App\Quran;

class SurahsPublicController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{

    $surahs = Surah::all();
    return view('public/surahs.index')
    ->with('surahs',$surahs);

}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
//
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show(Request $request, $id)
{
    if($request->ajax()){
        if($request->keywords){
            $surahs = Surah::Where('id','like','%'.$request->keywords.'%')->orWhere('nama_surat','like','%'.$request->keywords.'%')
            ->orWhere('arti_surat','like','%'.$request->keywords.'%');
        }else{
            $surahs = Surah::orderBy('id',$request->direction=='asc' ? $direction='desc' : $direction = 'asc');
        }
        $request->direction=='asc' ? $direction='desc' : $direction = 'asc';
        $view = (String)view('/surahs.list_surahs')
        ->with('surahs',$surahs);
        return response()->json(['view' => $view,'direction' => $direction]);
    }else{
        $surahs = Surah::all();
        $surah = Surah::findOrFail($id);       
        $qurans = $surah->qurans()->paginate(10);
//dd(get_class($qurans));
        return view('public/surahs.show', compact('qurans','surah','surahs'));
    }
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
//
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
}
public function listsurahs(Request $request)
{
    if($request->ajax()){
        if($request->keywords){
            $surahs = Surah::Where('id','like','%'.$request->keywords.'%')->orWhere('nama_surat','like','%'.$request->keywords.'%')
            ->orWhere('arti_surat','like','%'.$request->keywords.'%')->paginate(114);
        }else{
            $surahs = Surah::orderBy('id',$request->direction=='asc' ? $direction='desc' : $direction = 'asc')->paginate(114);
        }
        $request->direction=='asc' ? $direction='desc' : $direction = 'asc';
        $view = (String)view('public/surahs.list_surahs')
        ->with('surahs',$surahs)
        ->render();
        return response()->json(['view' => $view,'direction' => $direction]);
    }else{
        $surahs = Surah::orderBy('id','asc')->paginate(114);
        return view('public/surahs.sidesurahs')
        ->with('surahs',$surahs);
    }


}
}
