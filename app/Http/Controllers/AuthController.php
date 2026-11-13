<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => ['string', 'required'],
            'password' => ['string', 'required'],
        ]);

        if (Auth::guard('petugas')->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }

    public function logout(Request $req)
    {
        Auth::guard('petugas')->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }

    public function create()
    {
        return view('auth.login');
    }

    public function createRegister()
    {
        return view('auth.register');
    }

    public function register(Request $req)
    {
        $validated = $req->validate([
            'nama_petugas' => ['string', 'required'],
            'username' => ['string', 'required'],
            'jabatan' => ['string', 'required'],
            'password' => ['string', 'required'],
        ]);

        $petugas = Petugas::create($validated);
        Auth::guard('petugas')->login($petugas);
        return redirect()->route('dashboard');
    }
}
