<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;

class KataSandiController extends Controller
{
    public function index()
    {
        return view('auth/profil');
    }

    public function edit(User $user)
    {
        return view('auth/kata-sandi', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
        ], [
            'password.required' => 'Kata sandi wajib diisi',
            'password.min' => 'Kata sandi minimal harus 8 karakter',
            'password_confirm.required' => 'Konfirmasi Kata sandi wajib diisi',
            'password_confirm.same' => 'Konfirmasi Kata sandi harus cocok',
        ]);
        $request['password'] = Hash::make($request->password);
        User::where('id', $user->id)->update($request->only(['password']));
        return redirect(route('kata-sandi.index'))->with('berhasil', 'Kata sandi berhasil diubah!');
    }
}
