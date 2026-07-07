<!DOCTYPE html>

<html>
<head>
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

```
<div class="card">

    <h2 class="title">Tambah Pengguna</h2>

    <form action="/pengguna/simpan" method="POST">

        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="input">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="input">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="input">
        </div>

        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="input">
        </div>

        <div class="form-group">
            <label>Role</label>

            <select name="role" class="input">
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
            </select>

        </div>

        <button type="submit" class="btn btn-yellow">
            Simpan
        </button>

    </form>

</div>
```

</div>

</body>
</html>

