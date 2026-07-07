<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Kategori;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::with('kategori')->get();

        return view('v_laporan.index', compact('laporan'));
    }

    public function create()
    {
        $kategori = Kategori::all();

        return view('v_laporan.tambah', compact('kategori'));
    }

    public function store(Request $request)
    {
        Laporan::create([
            'id_pengguna' => session('id_pengguna'),
            'id_kategori' => $request->id_kategori,
            'jenis_laporan' => $request->jenis_laporan,
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'nama_pelapor' => $request->nama_pelapor,
            'no_hp_pelapor' => $request->no_hp_pelapor,
            'lokasi' => $request->lokasi,
            'status' => 'open'
        ]);
        return redirect('/laporan');
    }

    public function edit($id)
    {
        $laporan = Laporan::find($id);

        $kategori = Kategori::all();

        return view(
            'v_laporan.edit',
            compact(
                'laporan',
                'kategori'
            )
        );
    }

    public function update(Request $request, $id)
    {
        $laporan = Laporan::find($id);

        $laporan->update([
            'id_kategori' => $request->id_kategori,
            'jenis_laporan' => $request->jenis_laporan,
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'nama_pelapor' => $request->nama_pelapor,
            'no_hp_pelapor' => $request->no_hp_pelapor,
            'lokasi' => $request->lokasi
        ]);

        return redirect('/laporan');
    }

    public function destroy($id)
    {
        Laporan::find($id)->delete();

        return redirect('/laporan');
    }
}
