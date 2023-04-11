<?php

namespace App\Http\Controllers;

use App\Models\AccMasyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('admin')->user() || Auth::user()) {
            return redirect('/');
        }
        return view('auth.masyarakat.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if($request->is_admin) {
            if (Auth::user()) {
                Auth::logout();
            }
            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect('/');
            }
        } else {
            if (Auth::guard('admin')->user()) {
                Auth::guard('admin')->logout();
            }
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect('/');
            }
        }
     
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
 
    }

    public function showRegisterForm()
    {
        if (Auth::guard('admin')->user() || Auth::user()) {
            return redirect('/');
        }
        return view('auth.masyarakat.register');;
    }

    public function register(Request $request)
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
            return redirect()->route('login.index');
        } else {
            return redirect()->back();
        }

    }

    public function logout(Request $request)
    {
       Auth::logout();
       Auth::guard('admin')->logout();
       return redirect('/');
    }
}
