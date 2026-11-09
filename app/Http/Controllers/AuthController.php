<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['email', 'required'],
            'password' => ['string', 'required'],
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/login');
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
            'name' => ['string', 'required'],
            'email' => ['email', 'required', 'unique:users,email'],
            'password' => ['string', 'required'],
        ]);

        $user = User::create($validated);
        Auth::login($user);
        return redirect()->route('dashboard');
    }
}
