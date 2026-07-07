<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();

        return view('v_pengguna.index', compact('pengguna'));
    }

    public function create()
    {
        return view('v_pengguna.tambah');
    }

    public function store(Request $request)
    {
        Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
            'role' => $request->role
        ]);

        return redirect('/pengguna');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::find($id);

        return view('v_pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = Pengguna::find($id);

        $pengguna->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
            'role' => $request->role
        ]);

        return redirect('/pengguna');
    }

    public function destroy($id)
    {
        Pengguna::find($id)->delete();

        return redirect('/pengguna');
    }
}