<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class AuthSiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:siswa')->except('logout');
    }

    public function index()
    {
        return view('auth.siswa.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('siswa')->attempt($credentials)) {
            // $user = auth()->user();
            $request->session()->regenerate();
            return redirect()->intended('dashboard-siswa');
        }
        return back()->with('loginError', 'Login Failed!!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('logout', 'Logout Success !!');
    }

    public function siswa()
    {
        return view('siswa');
    }
    
}
