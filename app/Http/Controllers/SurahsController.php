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

class SurahsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if($request->ajax()){
            if($request->keywords){
                $surahs = Surah::Where('id','like','%'.$request->keywords.'%')->orWhere('nama_surat','like','%'.$request->keywords.'%')
                ->orWhere('arti_surat','like','%'.$request->keywords.'%')
                ->paginate(10);
            }else{
                $surahs = Surah::orderBy('id',$request->direction)
                ->paginate(10);
            }
            $request->direction=='asc' ? $direction='desc' : $direction = 'asc';
            $view = (String)view('dashboard/surahs.list')
            ->with('surahs',$surahs)
            ->render();
            return response()->json(['view' => $view,'direction' => $direction]);
        }else{
            $surahs = Surah::orderBy('id','asc')->paginate(10);
            $surahs->addToindex();
            return view('dashboard/surahs.index')
            ->with('surahs',$surahs);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/surahs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Surah::create($request->all());
        Session::flash('notice','Surah has been created successfully.');
        return redirect('administrator/surahs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $surah = Surah::findOrFail($id);       
       $qurans = $surah->qurans()->paginate(10);
       $qurans->addToindex();
       //dd(get_class($qurans));
        return view('dashboard/surahs.show', compact('qurans','surah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surah = Surah::findOrFail($id);
        return view('dashboard/surahs.edit', compact('surah'));
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
         $surah = Surah::findOrFail($id);
        $surah->update($request->all());
        $surah->updateToindex();
        Session::flash('notice','Surah has been updated successfully.');
        return redirect('administrator/surahs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $surah = Surah::findOrFail($id);
        $surah->delete();
        Session::flash('notice','Surah has been deleted successfully.');
        return redirect('administrator/surahs');
    }
}
