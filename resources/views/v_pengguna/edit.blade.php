<!DOCTYPE html>

<html>
<head>
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

```
<div class="card">

    <h2 class="title">Edit Pengguna</h2>

    <form action="/pengguna/update/{{ $pengguna->id_pengguna }}" method="POST">

        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="input" value="{{ $pengguna->nama }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="input" value="{{ $pengguna->email }}">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="input" value="{{ $pengguna->password }}">
        </div>

        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="input" value="{{ $pengguna->no_hp }}">
        </div>

        <div class="form-group">
            <label>Role</label>

            <select name="role" class="input">

                <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>

                <option value="staff" {{ $pengguna->role == 'staff' ? 'selected' : '' }}>
                    Staff
                </option>

            </select>

        </div>

        <button type="submit" class="btn btn-yellow">
            Update
        </button>

    </form>

</div>
```

</div>

</body>
</html>
