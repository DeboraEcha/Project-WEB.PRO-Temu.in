<?php

namespace App\Http\Controllers;

use App\Models\Laporan;

class BerandaController extends Controller
{
    public function index()
    {
        $laporan = Laporan::with('kategori')
                    ->latest()
                    ->get();

        return view('beranda', compact('laporan'));
    }
}