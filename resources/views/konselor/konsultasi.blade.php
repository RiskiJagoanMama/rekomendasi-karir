<!DOCTYPE html>
<html>
<head>

    <title>Konsultasi Konselor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h3>Daftar Konsultasi User</h3>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>

                    <th>No</th>

                    <th>Nama User</th>

                    <th>Pertanyaan</th>

                    <th>Status</th>

                    <th>Aksi</th>

                </tr>

                @foreach($konsultasis as $konsultasi)

                <tr>

                    <td>

                        {{ $loop->iteration }}

                    </td>

                    <td>

                        {{ $konsultasi->user->name }}

                    </td>

                    <td>

                        {{ $konsultasi->pesan }}

                    </td>

                    <td>

                        {{ $konsultasi->status }}

                    </td>

                    <td>

                        <a href="/konselor/konsultasi/{{ $konsultasi->id }}"
                            class="btn btn-primary">

                            Balas

                        </a>

                    </td>

                </tr>

                @endforeach

            </table>

        </div>
        <a href="/konselor/dashboard" class="btn btn-secondary">Kembali</a>
    </div>

</div>

</body>
</html>