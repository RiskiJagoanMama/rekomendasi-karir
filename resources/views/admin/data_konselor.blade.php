<!DOCTYPE html>
<html>
<head>

    <title>Data Konselor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Data Konselor</h2>

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>

        </tr>

        @foreach($konselors as $konselor)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $konselor->name }}</td>

            <td>{{ $konselor->email }}</td>

            <td>{{ $konselor->role }}</td>

        </tr>

        @endforeach

    </table>
    <a href="/admin/dashboard" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>