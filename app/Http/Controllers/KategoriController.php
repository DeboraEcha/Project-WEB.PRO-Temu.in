<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();

        return view('v_kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('v_kategori.tambah');
    }

    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('v_kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        $kategori->delete();

        return redirect('/kategori');
    }
}
