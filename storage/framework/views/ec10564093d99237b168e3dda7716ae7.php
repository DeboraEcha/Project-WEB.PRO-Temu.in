<?php
$current = request()->path();
?>

<div class="d-flex flex-column flex-lg-row min-vh-100 bg-light">
    <aside class="sidebar bg-white border-end p-3">
        <div class="d-flex align-items-center mb-4 px-2">
            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2" style="width:42px;height:42px;font-weight:700;">T</div>
            <div>
                <h5 class="fw-bold mb-0">Temu.in</h5>
                <small class="text-muted">Admin Panel</small>
            </div>
        </div>

        <ul class="nav flex-column gap-1">
            <li>
                <a href="/dashboard" class="nav-link rounded px-3 py-2 <?php echo e($current === 'dashboard' ? 'active bg-primary text-white' : 'text-dark'); ?>">
                    <i class="bi bi-grid me-2"></i>Dashboard
                </a>
            </li>
            <?php if(session('role') == 'admin'): ?>
                <li>
                    <a href="/kategori" class="nav-link rounded px-3 py-2 <?php echo e(str_starts_with($current, 'kategori') ? 'active bg-primary text-white' : 'text-dark'); ?>">
                        <i class="bi bi-tags me-2"></i>Kategori
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="/laporan" class="nav-link rounded px-3 py-2 <?php echo e(str_starts_with($current, 'laporan') ? 'active bg-primary text-white' : 'text-dark'); ?>">
                    <i class="bi bi-file-earmark-text me-2"></i>Laporan
                </a>
            </li>
            <li>
                <a href="/klaim" class="nav-link rounded px-3 py-2 <?php echo e(str_starts_with($current, 'klaim') ? 'active bg-primary text-white' : 'text-dark'); ?>">
                    <i class="bi bi-clipboard-check me-2"></i>Klaim
                </a>
            </li>
        </ul>

        <div class="mt-4 px-2">
            <a href="/logout" class="btn btn-outline-danger w-100">Logout</a>
        </div>
    </aside>

    <main class="flex-grow-1 p-4 p-lg-5">
<?php /**PATH C:\laragon\www\temuin (2)\temuin\resources\views/partials/sidebar-start.blade.php ENDPATH**/ ?>