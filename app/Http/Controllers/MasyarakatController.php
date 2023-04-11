<?php

namespace App\Http\Controllers;

use App\Models\AccMasyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['masyarakat'] = AccMasyarakat::all();
        return view('pages.masyarakat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masyarakat.create');
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
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:acc_masyarakat'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = AccMasyarakat::create([
            'name'     => $validatedData['name'],
            'email'    => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        if($user) {
            return redirect()->route('masyarakat.index');
        } else {
            return redirect()->back();
        }
    }

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
        $data['masyarakat'] = AccMasyarakat::find($id);
        return view('pages.masyarakat.edit', $data);
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
            'email'    => 'required|string|email|max:255|unique:acc_masyarakat,email,'.$id,
            'password' => ['confirmed'],
        ]);

        $user = AccMasyarakat::find($id);

        if($request->password) {
            $user->update([
                'name'     => $validatedData['name'],
                'email'    => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);
        } else {
            $user->update([
                'name'     => $validatedData['name'],
                'email'    => $validatedData['email']
            ]);
        }

        if($user) {
            return redirect()->route('masyarakat.index');
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
        AccMasyarakat::where('id', $id)->delete();

        return redirect()->route('masyarakat.index');
    }
}
