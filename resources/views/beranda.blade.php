<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temu.in | Pelaporan Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8fbff 0%, #eef4ff 100%);
            color: #14213d;
        }

        .navbar {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid #e6eefc;
        }

        .hero-card {
            background: linear-gradient(135deg, #ffffff 0%, #f5f9ff 100%);
            border: 1px solid #e4ebf8;
            box-shadow: 0 20px 45px rgba(24, 74, 157, 0.12);
        }

        .stat-box {
            border-radius: 1rem;
            padding: 1rem;
            background: #fff;
            border: 1px solid #e8eefc;
            height: 100%;
        }

        .report-card {
            border: 1px solid #e9effa;
            border-radius: 1rem;
            transition: transform .2s ease, box-shadow .2s ease;
            overflow: hidden;
        }

        .report-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(20, 33, 61, 0.08);
        }

        .section-title {
            letter-spacing: -0.01em;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-primary" href="#">Temu.in</a>
        <div class="ms-auto">
            <a class="btn btn-outline-primary" href="/login">Login Admin</a>
        </div>
    </div>
</nav>

@php
    $totalLaporan = $laporan->count();
    $laporanHilang = $laporan->where('jenis_laporan', 'Hilang')->count();
    $laporanDitemukan = $laporan->whereIn('jenis_laporan', ['Ditemukan', 'Temuan'])->count();
    $laporanSelesai = $laporan->where('status', 'closed')->count();
@endphp

<main class="container py-5">
    <section class="hero-card rounded-4 p-4 p-lg-5 mb-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-primary-subtle text-primary mb-3">Sistem Pelaporan Barang Hilang & Ditemukan</span>
                <h1 class="display-6 fw-bold mb-3">Temukan kembali barang Anda dengan cepat dan aman.</h1>
                <p class="lead text-muted mb-4">
                    Platform ini membantu mahasiswa dan civitas kampus melaporkan barang hilang atau barang yang ditemukan secara terstruktur, sehingga proses pencarian menjadi lebih mudah.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#laporan" class="btn btn-primary btn-lg">Lihat Laporan Terbaru</a>
                    <a href="/login" class="btn btn-outline-secondary btn-lg">Masuk ke Dashboard</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <h5 class="fw-semibold mb-3">Ringkasan cepat</h5>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="stat-box">
                                    <div class="text-muted small">Total Laporan</div>
                                    <div class="fw-bold fs-4">{{ $totalLaporan }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-box">
                                    <div class="text-muted small">Barang Hilang</div>
                                    <div class="fw-bold fs-4">{{ $laporanHilang }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-box">
                                    <div class="text-muted small">Barang Ditemukan</div>
                                    <div class="fw-bold fs-4">{{ $laporanDitemukan }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-box">
                                    <div class="text-muted small">Selesai</div>
                                    <div class="fw-bold fs-4">{{ $laporanSelesai }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row g-4 mb-4">
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary-subtle rounded-circle p-2 me-3">
                            <span class="fw-bold text-primary">1</span>
                        </div>
                        <h5 class="mb-0 fw-semibold">Laporkan barang</h5>
                    </div>
                    <p class="text-muted mb-0">Isi data barang yang hilang atau ditemukan agar admin bisa memprosesnya.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success-subtle rounded-circle p-2 me-3">
                            <span class="fw-bold text-success">2</span>
                        </div>
                        <h5 class="mb-0 fw-semibold">Tim memverifikasi</h5>
                    </div>
                    <p class="text-muted mb-0">Admin akan mengecek informasi dan mencocokkan laporan yang masuk.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning-subtle rounded-circle p-2 me-3">
                            <span class="fw-bold text-warning">3</span>
                        </div>
                        <h5 class="mb-0 fw-semibold">Barang dikembalikan</h5>
                    </div>
                    <p class="text-muted mb-0">Setelah cocok, proses pengambilan atau pengembalian barang bisa dilakukan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="laporan">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h2 class="section-title fw-bold mb-1">Laporan Terbaru</h2>
                <p class="text-muted mb-0">Daftar barang yang sedang dipantau oleh sistem.</p>
            </div>
        </div>

        <div class="row g-4">
            @forelse($laporan as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card report-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    @if($item->jenis_laporan == 'Hilang')
                                        <span class="badge bg-danger-subtle text-danger">Barang Hilang</span>
                                    @else
                                        <span class="badge bg-success-subtle text-success">Barang Ditemukan</span>
                                    @endif
                                </div>
                                @if($item->status == 'open')
                                    <span class="badge bg-warning text-dark">Open</span>
                                @elseif($item->status == 'claimed')
                                    <span class="badge bg-primary">Diklaim</span>
                                @elseif($item->status == 'closed')
                                    <span class="badge bg-success">Selesai</span>
                                @else
                                    <span class="badge bg-secondary">{{ $item->status }}</span>
                                @endif
                            </div>

                            <h4 class="fw-bold mb-3">{{ $item->nama_barang }}</h4>
                            <p class="text-muted mb-3">{{ \Illuminate\Support\Str::limit($item->deskripsi, 100) }}</p>

                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><strong class="text-dark">Kategori:</strong> {{ $item->kategori->nama_kategori ?? '-' }}</li>
                                <li class="mb-2"><strong class="text-dark">Lokasi:</strong> {{ $item->lokasi }}</li>
                                <li><strong class="text-dark">Pelapor:</strong> {{ $item->nama_pelapor }}</li>
                            </ul>

                            <a class="btn btn-outline-primary w-100" href="https://wa.me/6285697568919">Hubungi Admin</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center rounded-4">
                        Belum ada laporan yang tersedia saat ini.
                    </div>
                </div>
            @endforelse
        </div>
    </section>
</main>
</body>
</html>
