<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KlaimController;

use App\Models\Kategori;
use App\Models\Laporan;
use App\Models\Klaim;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', [BerandaController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/proses', [LoginController::class, 'proses']);
Route::get('/logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware('ceklogin')->group(function () {

    Route::get('/dashboard', function () {

        $totalKategori = Kategori::count();
        $totalLaporan = Laporan::count();
        $totalBarangHilang = Laporan::where('jenis_laporan', 'Hilang')->count();
        $totalBarangDitemukan = Laporan::whereIn('jenis_laporan', ['Ditemukan', 'Temuan'])->count();
        $totalKlaim = Klaim::count();

        return view('dashboard', compact(
            'totalKategori',
            'totalLaporan',
            'totalBarangHilang',
            'totalBarangDitemukan',
            'totalKlaim'
        ));

    });

});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['ceklogin','cekrole:admin'])->group(function () {

    // Pengguna
    Route::get('/pengguna', [PenggunaController::class, 'index']);
    Route::get('/pengguna/tambah', [PenggunaController::class, 'create']);
    Route::post('/pengguna/simpan', [PenggunaController::class, 'store']);
    Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit']);
    Route::post('/pengguna/update/{id}', [PenggunaController::class, 'update']);
    Route::get('/pengguna/hapus/{id}', [PenggunaController::class, 'destroy']);

    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/tambah', [KategoriController::class, 'create']);
    Route::post('/kategori/simpan', [KategoriController::class, 'store']);
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

});

/*
|--------------------------------------------------------------------------
| ADMIN & STAFF
|--------------------------------------------------------------------------
*/

Route::middleware(['ceklogin','cekrole:admin,staff'])->group(function () {

    // Laporan
    Route::get('/laporan', [LaporanController::class, 'index']);
    Route::get('/laporan/tambah', [LaporanController::class, 'create']);
    Route::post('/laporan/simpan', [LaporanController::class, 'store']);
    Route::get('/laporan/edit/{id}', [LaporanController::class, 'edit']);
    Route::post('/laporan/update/{id}', [LaporanController::class, 'update']);
    Route::get('/laporan/hapus/{id}', [LaporanController::class, 'destroy']);

    // Klaim
    Route::get('/klaim', [KlaimController::class, 'index']);
    Route::get('/klaim/tambah', [KlaimController::class, 'create']);
    Route::post('/klaim/simpan', [KlaimController::class, 'store']);
    Route::get('/klaim/edit/{id}', [KlaimController::class, 'edit']);
    Route::post('/klaim/update/{id}', [KlaimController::class, 'update']);
    Route::get('/klaim/hapus/{id}', [KlaimController::class, 'destroy']);

});
