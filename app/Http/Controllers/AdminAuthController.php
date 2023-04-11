<?php

namespace App\Http\Controllers;

use App\Models\AccMasyarakat;
use App\Models\AccPetugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return view('auth.petugas.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showRegisterForm()
    {
        if (Auth::guard('admin')->user()) {
            return redirect('/');
        }
        return view('auth.petugas.register');;
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:acc_petugas'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = AccPetugas::create([
            'name'     => $validatedData['name'],
            'email'    => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        if($user) {
            return redirect()->route('admin.login.index');
        } else {
            return redirect()->back();
        }

    }

    public function logout(Request $request)
    {
       Auth::guard('admin')->logout();
       return redirect('/');
    }
}
