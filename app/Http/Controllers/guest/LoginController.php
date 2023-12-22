<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Console\View\Components\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.guest.login.index');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            toast('Berhasil Login!', 'success');
            return redirect()->intended('/user/dashboard');
        }

        toast('Email Atau Password Yang Anda Masukkan Salah!', 'error');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
