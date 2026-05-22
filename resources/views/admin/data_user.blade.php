<!DOCTYPE html>
<html>
<head>

    <title>Data User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Data User</h2>

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>

        </tr>

        @foreach($users as $user)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $user->name }}</td>

            <td>{{ $user->email }}</td>

            <td>{{ $user->role }}</td>

        </tr>

        @endforeach

    </table>
    <a href="/admin/dashboard" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>