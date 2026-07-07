<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klaim;
use App\Models\Laporan;

class KlaimController extends Controller
{
    public function index()
    {
        $klaim = Klaim::latest()->get();

        return view('v_klaim.index', compact('klaim'));
    }

    public function create()
    {
        $laporan = Laporan::all();

        return view('v_klaim.tambah', compact('laporan'));
    }

    public function store(Request $request)
    {
        $klaim = Klaim::create([

            'id_laporan' => $request->id_laporan,

            'nama_pengklaim' => $request->nama_pengklaim,

            'no_hp_pengklaim' => $request->no_hp_pengklaim,

            'bukti_klaim' => $request->bukti_klaim,

            'status' => 'pending'
        ]);

        $this->syncLaporanStatus($klaim->id_laporan);

        return redirect('/klaim');
    }

    public function edit($id)
    {
        $klaim = Klaim::find($id);

        $laporan = Laporan::all();

        return view('v_klaim.edit', compact('klaim', 'laporan'));
    }

    public function update(Request $request, $id)
    {
        $klaim = Klaim::find($id);
        $idLaporanLama = $klaim->id_laporan;

        $klaim->update([

            'id_laporan' => $request->id_laporan,

            'nama_pengklaim' => $request->nama_pengklaim,

            'no_hp_pengklaim' => $request->no_hp_pengklaim,

            'bukti_klaim' => $request->bukti_klaim,

            'status' => $request->status
        ]);

        $this->syncLaporanStatus($idLaporanLama);
        $this->syncLaporanStatus($klaim->id_laporan);

        return redirect('/klaim');
    }

    public function destroy($id)
    {
        $klaim = Klaim::find($id);
        $idLaporan = $klaim->id_laporan;

        $klaim->delete();

        $this->syncLaporanStatus($idLaporan);

        return redirect('/klaim');
    }

    private function syncLaporanStatus($idLaporan)
    {
        if (!$idLaporan) {
            return;
        }

        $status = 'open';

        if (Klaim::where('id_laporan', $idLaporan)->where('status', 'approved')->exists()) {
            $status = 'closed';
        } elseif (Klaim::where('id_laporan', $idLaporan)->where('status', 'pending')->exists()) {
            $status = 'claimed';
        }

        Laporan::where('id_laporan', $idLaporan)->update([
            'status' => $status
        ]);
    }
}
