<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tafsir;
use App\Surah;

class TafsirsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surahs = Surah::paginate(10);
        return view('dashboard/tafsirs.index')->with('surahs',$surahs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/tafsirs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tafsir::create($request->all());
        Session::flash('notice','Tafsir has been created succesfully');
        return redirect('tafsirs');
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
        $tafsirs = $surah->tafsirs()->paginate(15);
        return view('dashboard/tafsirs.show',compact('tafsirs','surah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tafsir = Tafsir::findOrFail($id);
        return view('dashboard/tafsirs.edit',compact('tafsir'));
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
        $tafsir = Tafsir::findOrFail($id);
        $tafsir->update($request->all());
        Session::flash('notice', 'Tafsir has been updated succesfully.');
        return redirect('tafsirs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tafsir = Tafsir::findOrFail($id);
        $tafsir->delete();
        Session::flash('notice','Tafsir has been deleted succesfully.');
        return redirect('tafsirs');
    }
}
