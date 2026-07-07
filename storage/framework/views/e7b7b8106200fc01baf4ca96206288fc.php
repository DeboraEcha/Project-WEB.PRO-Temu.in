<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan | Temu.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #f5f8ff; color: #14213d; }
        .page-card { border: 0; border-radius: 1.25rem; box-shadow: 0 16px 35px rgba(20,33,61,0.08); }
    </style>
</head>
<body>
    <?php echo $__env->make('partials.sidebar-start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container py-5">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Data Laporan</h2>
                <p class="text-muted mb-0">Kelola barang hilang dan barang ditemukan.</p>
            </div>
            <div class="d-flex flex-wrap gap-2 mt-3 mt-lg-0">
                <a href="/laporan/tambah" class="btn btn-primary">+ Tambah Laporan</a>
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
                                <th>Jenis</th>
                                <th>Kategori</th>
                                <th>Nama Barang</th>
                                <th>Deskripsi</th>
                                <th>Pelapor</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td>
                                    <?php if($item->jenis_laporan == 'Hilang'): ?>
                                        <span class="badge bg-danger-subtle text-danger">Hilang</span>
                                    <?php else: ?>
                                        <span class="badge bg-success-subtle text-success">Ditemukan</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($item->kategori->nama_kategori ?? 'Tidak Ada Kategori'); ?></td>
                                <td class="fw-semibold"><?php echo e($item->nama_barang); ?></td>
                                <td><?php echo e(Str::limit($item->deskripsi, 40)); ?></td>
                                <td><?php echo e($item->nama_pelapor); ?></td>
                                <td><?php echo e($item->lokasi); ?></td>
                                <td>
                                    <?php if($item->status == 'open'): ?>
                                        <span class="badge bg-warning text-dark">Open</span>
                                    <?php elseif($item->status == 'claimed'): ?>
                                        <span class="badge bg-primary">Diklaim</span>
                                    <?php elseif($item->status == 'closed'): ?>
                                        <span class="badge bg-success">Selesai</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary"><?php echo e($item->status); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end">
                                    <a href="/laporan/edit/<?php echo e($item->id_laporan); ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="/laporan/hapus/<?php echo e($item->id_laporan); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin hapus data?')">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('partials.sidebar-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\temuin (2)\temuin\resources\views/v_laporan/index.blade.php ENDPATH**/ ?>