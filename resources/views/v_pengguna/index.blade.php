<!DOCTYPE html>

<html>
<head>
    <title>Data Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

<div class="header">

    <div>
        <h2 class="title">Data Pengguna</h2>
        <p class="subtitle">Hanya Admin yang dapat melihat</p>
    </div>

    <a href="/pengguna/tambah" class="btn btn-yellow">
        + Tambah Pengguna
    </a>

</div>

<div class="card">

    <table class="table">

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Role</th>
            <th>Dibuat</th>
            <th>Diubah</th>
            <th>Aksi</th>
        </tr>

        @foreach($pengguna as $p)

        <tr>
            <td>{{ $p->id_pengguna }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->no_hp }}</td>
            <td>{{ $p->role }}</td>
            <td>{{ $p->created_at }}</td>
            <td>{{ $p->updated_at }}</td>

            <td>
                <a href="/pengguna/edit/{{ $p->id_pengguna }}" class="btn btn-blue">
                    Edit
                </a>

                <a href="/pengguna/hapus/{{ $p->id_pengguna }}" class="btn btn-red">
                    Hapus
                </a>
            </td>

        </tr>

        @endforeach

    </table>

</div>
```

</div>

</body>
</html>
