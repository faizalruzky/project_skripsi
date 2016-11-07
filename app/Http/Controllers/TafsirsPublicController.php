<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Session;
use Validator;
use App\Http\Requests;
use App\Surah;
use App\Tafsir;

class TafsirsPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tafsirs = Surah::all();
        return view('public/tafsirs.index')->with('tafsirs',$tafsirs);
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
                $tafsirs = Surah::Where('id','like','%'.$request->keywords.'%')->orWhere('nama_surat','like','%'.$request->keywords.'%')
                ->orWhere('arti_surat','like','%'.$request->keywords.'%');
            }else{
               $tafsirs = Surah::orderBy('id',$request->direction=='asc' ? $direction='desc' : $direction = 'asc');
           }
           $request->direction=='asc' ? $direction='desc' : $direction = 'asc';
           $view = (String)view('/surahs.list_surahs')
           ->with('tafsirs',$tafsirs);
           return response()->json(['view' => $view,'direction' => $direction]);
       }else{
            $tafsirs = Surah::all();
            $surah = Surah::findOrFail($id);       
            $qurantafsirs = $surah->tafsirs()->paginate(15);
       //dd(get_class($qurans));
            return view('public/tafsirs.show', compact('tafsirs','surah','qurantafsirs'));
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
    public function listtafsirs(Request $request)
    {
        if($request->ajax()){
            if($request->keywords){
                $tafsirs = Surah::Where('id','like','%'.$request->keywords.'%')->orWhere('nama_surat','like','%'.$request->keywords.'%')
                ->orWhere('arti_surat','like','%'.$request->keywords.'%')->paginate(114);
            }else{
                $tafsirs = Surah::orderBy('id',$request->direction=='asc' ? $direction='desc' : $direction = 'asc')->paginate(114);
            }
            $request->direction=='asc' ? $direction='desc' : $direction = 'asc';
            $view = (String)view('public/tafsirs.list_surahs')
            ->with('tafsirs',$tafsirs)
            ->render();
            return response()->json(['view' => $view,'direction' => $direction]);
        }else{
            $tafsirs = Surah::orderBy('id','asc')->paginate(114);
            return view('public/tafsirs.sidesurahs')
            ->with('tafsirs',$tafsirs);
        }


    }
    public function listjalalayn(Request $request)
    {
        if($request->ajax()){
            if($request->keywords){
                $tafsirs = Surah::Where('id','like','%'.$request->keywords.'%')->orWhere('nama_surat','like','%'.$request->keywords.'%')
                ->orWhere('arti_surat','like','%'.$request->keywords.'%')->paginate(114);
            }else{
                $tafsirs = Surah::orderBy('id',$request->direction=='asc' ? $direction='desc' : $direction = 'asc')->paginate(114);
            }
            $request->direction=='asc' ? $direction='desc' : $direction = 'asc';
            $view = (String)view('public/jalalayns.list_surahs')
            ->with('tafsirs',$tafsirs)
            ->render();
            return response()->json(['view' => $view,'direction' => $direction]);
        }else{
            $tafsirs = Surah::orderBy('id','asc')->paginate(114);
            return view('public/jalalayns.sidesurahs')
            ->with('tafsirs',$tafsirs);
        }


    }
    public function jalalayn(Request $request)
    {
        $tafsirs = Surah::all();
        return view('public/jalalayns.index')->with('tafsirs',$tafsirs);
    }
    public function showjalalayn(Request $request, $id)
    {
        if($request->ajax()){
            if($request->keywords){
                $tafsirs = Surah::Where('id','like','%'.$request->keywords.'%')->orWhere('nama_surat','like','%'.$request->keywords.'%')
                ->orWhere('arti_surat','like','%'.$request->keywords.'%');
            }else{
               $tafsirs = Surah::orderBy('id',$request->direction=='asc' ? $direction='desc' : $direction = 'asc');
           }
           $request->direction=='asc' ? $direction='desc' : $direction = 'asc';
           $view = (String)view('/jalalayns.list_surahs')
           ->with('tafsirs',$tafsirs);
           return response()->json(['view' => $view,'direction' => $direction]);
       }else{
            $tafsirs = Surah::all();
            $surah = Surah::findOrFail($id);       
            $qurantafsirs = $surah->tafsirs()->paginate(15);
       //dd(get_class($qurans));
            return view('public/jalalayns.show', compact('tafsirs','surah','qurantafsirs'));
        }
    }
}
