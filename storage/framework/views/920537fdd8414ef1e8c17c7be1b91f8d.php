<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Temu.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f5f8ff;
            color: #14213d;
        }
        .page-card {
            border: 0;
            border-radius: 1.25rem;
            box-shadow: 0 16px 35px rgba(20, 33, 61, 0.08);
        }
        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <?php echo $__env->make('partials.sidebar-start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container py-5">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Halo, <?php echo e(session('nama')); ?></h2>
                <p class="text-muted mb-0">Selamat datang di panel Temu.in. Kelola kategori, laporan, dan klaim dari satu tempat.</p>
            </div>
            <a href="/logout" class="btn btn-outline-danger mt-3 mt-lg-0">Logout</a>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-lg-3 col-md-6">
                <div class="card page-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-2">Total Kategori</p>
                                <h3 class="fw-bold mb-0"><?php echo e($totalKategori); ?></h3>
                            </div>
                            <div class="stat-icon bg-primary-subtle text-primary">K</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card page-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-2">Total Laporan</p>
                                <h3 class="fw-bold mb-0"><?php echo e($totalLaporan); ?></h3>
                            </div>
                            <div class="stat-icon bg-success-subtle text-success">L</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card page-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-2">Barang Hilang</p>
                                <h3 class="fw-bold mb-0"><?php echo e($totalBarangHilang); ?></h3>
                            </div>
                            <div class="stat-icon bg-danger-subtle text-danger">H</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card page-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-2">Barang Ditemukan</p>
                                <h3 class="fw-bold mb-0"><?php echo e($totalBarangDitemukan); ?></h3>
                            </div>
                            <div class="stat-icon bg-success-subtle text-success">D</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card page-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-2">Total Klaim</p>
                                <h3 class="fw-bold mb-0"><?php echo e($totalKlaim); ?></h3>
                            </div>
                            <div class="stat-icon bg-warning-subtle text-warning">C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card page-card">
            <div class="card-body p-4">
                <h4 class="fw-bold mb-3">Menu Utama</h4>
                <div class="d-flex flex-wrap gap-2">
                    <?php if(session('role') == 'admin'): ?>
                        <a href="/kategori" class="btn btn-outline-primary">Kelola Kategori</a>
                    <?php endif; ?>
                    <a href="/laporan" class="btn btn-primary">Kelola Laporan</a>
                    <a href="/klaim" class="btn btn-outline-secondary">Kelola Klaim</a>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('partials.sidebar-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\temuin (2)\temuin\resources\views/dashboard.blade.php ENDPATH**/ ?>