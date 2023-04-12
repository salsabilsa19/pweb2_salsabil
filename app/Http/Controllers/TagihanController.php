<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $tagihan = Tagihan::all();
        return view('pages.tagihan.index', compact(['tagihan']));
    
    }

    public function create()
    {
        return view('tagihan.create');
    }
    

}

