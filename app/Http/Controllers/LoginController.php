<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nama_pengguna' => 'required',
            'password' => 'required',
        ], [
            'nama_pengguna.required' => 'Nama pengguna wajib diisi',
            'password.required' => 'Kata sandi wajib diisi',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back();
    }
}
