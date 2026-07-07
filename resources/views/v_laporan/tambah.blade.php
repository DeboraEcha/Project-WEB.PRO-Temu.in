<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Laporan | Temu.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #f5f8ff; color: #14213d; }
        .page-card { border: 0; border-radius: 1.25rem; box-shadow: 0 16px 35px rgba(20,33,61,0.08); }
    </style>
</head>
<body>
    @include('partials.sidebar-start')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card page-card">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h3 class="fw-bold mb-1">Tambah Laporan</h3>
                                <p class="text-muted mb-0">Isi data barang hilang atau ditemukan.</p>
                            </div>
                            <a href="/laporan" class="btn btn-outline-secondary">Kembali</a>
                        </div>

                        <form action="/laporan/simpan" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Laporan</label>
                                    <select name="jenis_laporan" class="form-select" required>
                                        <option value="Hilang">Hilang</option>
                                        <option value="Temuan">Ditemukan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kategori</label>
                                    <select name="id_kategori" class="form-select" required>
                                        <option value="">-- Pilih Kategori --</option>
                                        @foreach($kategori as $k)
                                            <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nama Pelapor</label>
                                    <input type="text" name="nama_pelapor" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">No HP Pelapor</label>
                                    <input type="text" name="no_hp_pelapor" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar-end')
</body>
</html>
