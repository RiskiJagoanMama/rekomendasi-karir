<!DOCTYPE html>
<html>
<head>

    <title>Hasil SAW</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h3>Hasil Rekomendasi Karir</h3>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>

                    <th>Ranking</th>
                    <th>Karir</th>
                    <th>Deskripsi</th>
                    <th>Nilai SAW</th>

                </tr>

                @foreach($hasil as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item['karir'] }}</td>

                    <td>{{ $item['deskripsi'] }}</td>

                    <td>

                        <span class="badge bg-primary">

                            {{ $item['nilai'] }}

                        </span>

                    </td>

                </tr>

                @endforeach

            </table>

            <a href="/rekomendasi"
            class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </div>

</div>

</body>
</html>