<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Temu.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f4f8ff 0%, #eef5ff 100%);
            min-height: 100vh;
        }
        .login-card {
            border: 0;
            border-radius: 1.25rem;
            box-shadow: 0 20px 45px rgba(20, 33, 61, 0.12);
            overflow: hidden;
        }
        .brand-badge {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card login-card">
                    <div class="card-body p-4 p-lg-5">
                        <div class="text-center mb-4">
                            <div class="brand-badge mx-auto mb-3">T</div>
                            <h3 class="fw-bold mb-1">Login Temu.in</h3>
                            <p class="text-muted mb-0">Masuk ke panel admin dan staf</p>
                        </div>

                        <?php if(session('gagal')): ?>
                            <div class="alert alert-danger rounded-3">
                                <?php echo e(session('gagal')); ?>

                            </div>
                        <?php endif; ?>

                        <form action="/login/proses" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="nama@email.com" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                            </div>
                            <button class="btn btn-primary w-100">Masuk</button>
                        </form>

                        <div class="text-center mt-3">
                            <a href="/" class="text-decoration-none text-muted">Kembali ke beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\temuin\resources\views/v_login/index.blade.php ENDPATH**/ ?>