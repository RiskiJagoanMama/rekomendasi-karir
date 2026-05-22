<!DOCTYPE html>
<html>
<head>

    <title>History Konsultasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>History Konsultasi</h3>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>

                    <th>No</th>

                    <th>Konselor</th>

                    <th>Pertanyaan</th>

                    <th>Balasan</th>

                    <th>Status</th>

                </tr>

                @foreach($konsultasis as $konsultasi)

                <tr>

                    <td>

                        {{ $loop->iteration }}

                    </td>

                    <td>

                        {{ $konsultasi->konselor->name }}

                    </td>

                    <td>

                        {{ $konsultasi->pesan }}

                    </td>

                    <td>

                        @if($konsultasi->balasan)

                            {{ $konsultasi->balasan }}

                        @else

                            <span class="text-danger">

                                Belum dibalas

                            </span>

                        @endif

                    </td>

                    <td>

                        {{ $konsultasi->status }}

                    </td>

                </tr>

                @endforeach

            </table>

        </div>
        <a href="/user/dashboard" class="btn btn-secondary">Kembali</a>
    </div>

</div>

</body>
</html>