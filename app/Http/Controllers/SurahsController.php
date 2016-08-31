<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use App\Http\Requests;
use App\Surah;

class SurahsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $surahs = Surah::paginate(10);
        return view('surahs.index')->with('surahs', $surahs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surahs.create');
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
        return redirect('surahs');
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
        $qurans = Surah::find($id)->qurans;
        return view('surahs.show')->with('surah',$surah)->with('qurans',$qurans);
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
        return view('surahs.edit', compact('surah'));
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
        Session::flash('notice','Surah has been updated successfully.');
        return redirect('surahs');
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
        Session::flash('Surah has been deleted successfully.');
        return redirect('surahs');
    }
}
