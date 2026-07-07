<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Klaim | Temu.in</title>
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
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Data Klaim</h2>
                <p class="text-muted mb-0">Pantau pengajuan klaim barang yang masuk.</p>
            </div>
            <div class="d-flex flex-wrap gap-2 mt-3 mt-lg-0">
                <a href="/klaim/tambah" class="btn btn-primary">Tambah Klaim</a>
                <a href="/dashboard" class="btn btn-outline-secondary">Kembali</a>
            </div>
        </div>

        <div class="card page-card">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengklaim</th>
                                <th>No HP</th>
                                <th>Bukti Klaim</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($klaim as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_pengklaim }}</td>
                                <td>{{ $item->no_hp_pengklaim }}</td>
                                <td>{{ $item->bukti_klaim }}</td>
                                <td><span class="badge bg-warning text-dark">{{ $item->status }}</span></td>
                                <td class="text-end">
                                    <a href="/klaim/edit/{{ $item->id_klaim }}" class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="/klaim/hapus/{{ $item->id_klaim }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">Data klaim kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar-end')
</body>
</html>