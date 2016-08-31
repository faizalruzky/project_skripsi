<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Quran;

class QuransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qurans = Quran::paginate(3);
        return view('qurans.index')->with('qurans', $qurans);
    }
}
