<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Klaim | Temu.in</title>
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
                                <h3 class="fw-bold mb-1">Edit Klaim</h3>
                                <p class="text-muted mb-0">Perbarui pengajuan klaim yang sedang diproses.</p>
                            </div>
                            <a href="/klaim" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                        <form action="/klaim/update/{{ $klaim->id_klaim }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Laporan</label>
                                <select name="id_laporan" class="form-select">
                                    @foreach ($laporan as $item)
                                        <option value="{{ $item->id_laporan }}" {{ $klaim->id_laporan == $item->id_laporan ? 'selected' : '' }}>{{ $item->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Pengklaim</label>
                                <input type="text" name="nama_pengklaim" class="form-control" value="{{ $klaim->nama_pengklaim }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No HP Pengklaim</label>
                                <input type="text" name="no_hp_pengklaim" class="form-control" value="{{ $klaim->no_hp_pengklaim }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bukti Klaim</label>
                                <textarea name="bukti_klaim" class="form-control" rows="4">{{ $klaim->bukti_klaim }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="pending" {{ $klaim->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ $klaim->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ $klaim->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar-end')
</body>
</html>
