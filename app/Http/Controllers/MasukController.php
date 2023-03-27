<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function index()
    {
        return view('auth/masuk');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nama_pengguna' => 'required|alpha_dash',
            'password' => 'required|min:8',
        ], [
            'nama_pengguna.required' => 'Nama pengguna wajib diisi',
            'nama_pengguna.alpha_dash' => 'Nama pengguna hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah',
            'password.required' => 'Kata sandi wajib diisi',
            'password.min' => 'Kata sandi minimal harus 8 karakter',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('index'))->with('berhasil', 'Selamat datang, ' . auth()->user()->nama_pengguna);
        }
        return back()->with('gagal', 'Gagal masuk!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }
}
