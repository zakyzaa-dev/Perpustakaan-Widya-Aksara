<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => ['string', 'required'],
            'password' => ['string', 'required'],
        ]);
        
        $petugas = Petugas::where('username', $validated['username'])->first();
        
        if($petugas && Hash::check($validated['password'], $petugas->password)){
            $request->session()->regenerate();            
            Auth::login($petugas);
            // dd(Auth::check(), Auth::user());
            return redirect()->route('petugas.index');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah!',
        ])->onlyInput('username');
    }

    public function create()
    {
        return view('auth.login');
    }
}
