<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user() || Auth::guard('admin')->user()) {
            $data['user'] = Auth::user() ? Auth::user() : Auth::guard('admin')->user();
            $data['role'] = Auth::user() ? 'Masyarakat' : 'Petugas';
            return view('pages.index', $data);
        } else {
            return redirect('login');
        }
    }
}
