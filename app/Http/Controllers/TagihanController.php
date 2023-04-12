<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $data['tagihan'] = Tagihan::all();
        return view('pages.tagihan.index', $data);
    
    }

    public function create()
    {
        return view('pages.tagihan.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

}

