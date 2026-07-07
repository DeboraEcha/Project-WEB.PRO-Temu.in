<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori | Temu.in</title>
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
                <h2 class="fw-bold mb-1">Data Kategori</h2>
                <p class="text-muted mb-0">Kelola kategori barang untuk mempermudah pencatatan laporan.</p>
            </div>
            <div class="d-flex gap-2 mt-3 mt-lg-0">
                <a href="/kategori/tambah" class="btn btn-primary">+ Tambah Kategori</a>
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
                                <th>Nama Kategori</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->nama_kategori); ?></td>
                                <td class="text-end">
                                    <a href="/kategori/edit/<?php echo e($item->id_kategori); ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="/kategori/hapus/<?php echo e($item->id_kategori); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3" class="text-center text-muted">Data kategori kosong</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('partials.sidebar-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\laragon\www\temuin (2)\temuin\resources\views/v_kategori/index.blade.php ENDPATH**/ ?>