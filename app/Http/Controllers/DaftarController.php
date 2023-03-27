<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('auth/daftar', [
            'peran' => [
                'Admin',
                'Pakar',
            ]
        ]);
    }
    public function store(StoreUserRequest $request)
    {
        $request['password'] = Hash::make($request->password);
        User::create($request->except(['password_confirm']));
        return redirect(route('login'))->with('berhasil', 'Data akun berhasil ditambahkan!');
    }
}
