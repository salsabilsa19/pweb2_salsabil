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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'alamat'    => ['required', 'string', 'max:100'],
            'sebelumnya' => ['required', 'integer'],
            'sekarang' => ['required', 'integer'],            
            'jumlahtagihan'   => ['required', 'string', 'max:20'],
            'statuspembayaran'   => ['required', 'string', 'max:255'],

        ]);

        $user = Tagihan::create([
            'name'     => $validatedData['name'],
            'alamat'    => $validatedData['alamat'],
            'sebelumnya' => $validatedData['sebelumnya'],
            'sekarang' => $validatedData['sekarang'],
            'jumlahtagihan'  => $validatedData['jumlahtagihan'],
            'statuspembayaran'  => $validatedData['statuspembayaran'],
        ]);
        

        if($user) {
            // dd($user);
            return redirect()->route('tagihan.index');
        } else {
            // dd($user);
            return redirect()->back();
        }

    }
    // {
        
    //     $validatedData = $request->validate([
    //         'name'     => ['required', 'string', 'max:255'],
    //         'email'    => ['required', 'string', 'email', 'max:255', 'unique:acc_petugas'],
    //         'alamat'   => ['required', 'string', 'max:255'],
    //         'notelp'   => ['required', 'string', 'max:15'],
    //         'jumlahtagihan'   => ['required', 'string', 'max:20'],
    //         'statuspembayaran'   => ['required', 'string', 'max:255'],

    //     ]);

    //     $user = Tagihan::create([
    //         'name'     => $validatedData['name'],
    //         'email'    => $validatedData['email'],
    //         'alamat' => $validatedData['alamat'],
    //         'notelp' => $validatedData['notelp'],
    //         'jumlahtagihan'  => $validatedData['jumlahtagihan'],
    //         'statuspembayaran'  => $validatedData['statuspembayaran'],
    //     ]);

    //     if($user) {
    //         return redirect()->route('petugas.index');
    //     } else {
    //         return redirect()->back();
    //     }

    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Tagihan::find($id)->toArray();
        // dd($data);
        return view('pages.tagihan.edit', ['data'=>$data]);
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

        $validatedData = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'alamat'    => ['required', 'string', 'max:100'],
            'sebelumnya' => ['required', 'integer'],
            'sekarang' => ['required', 'integer'],
            'jumlahtagihan'   => ['required', 'string', 'max:20'],
            'statuspembayaran'   => ['required', 'string', 'max:255'],
            // 'name'     => ['required', 'string', 'max:255'],
            // 'email'    => 'required|string|email|max:255|unique:tagihan,email,'.$id,
            // 'alamat'   => ['required', 'string', 'max:255'],
            // 'notelp'   => ['required', 'string', 'max:15'],
            // 'jumlahtagihan'   => ['required', 'string', 'max:20'],
            // 'statuspembayaran'   => ['required', 'string', 'max:255'],

        ]);
        $user = Tagihan::find($id);
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->sebelumnya = $request->sebelumnya;
        $user->sekarang = $request->sekarang;
        $user->jumlahtagihan = $request->jumlahtagihan;
        $user->statuspembayaran = $request->statuspembayaran;
        $user->save(); 
        if($user) {
            return redirect()->route('tagihan.index');
        } else {
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tagihan::where('id', $id)->delete();

        return redirect()->route('tagihan.index');
    }
}
