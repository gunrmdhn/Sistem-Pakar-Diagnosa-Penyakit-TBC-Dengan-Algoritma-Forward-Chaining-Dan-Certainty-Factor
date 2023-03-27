<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('auth/profil');
    }

    public function create()
    {
        //
    }

    public function store(StoreUserRequest $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('auth/edit', [
            'user' => $user,
            'peran' => [
                'Admin',
                'Pakar',
            ]
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        User::where('id', $user->id)->update($request->only(['peran', 'nama_pengguna']));
        return redirect(route('user.index'))->with('berhasil', 'Data pakar berhasil diubah!');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect(route('index'))->with('berhasil', 'Data pakar berhasil dihapus!');
    }
}
