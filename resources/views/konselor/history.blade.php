<!DOCTYPE html>
<html>
<head>

    <title>History SAW</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">

            <h3>History Hasil SAW</h3>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Karir</th>
                    <th>Nilai SAW</th>
                    <th>Tanggal</th>

                </tr>

                @foreach($histories as $history)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $history->karir }}</td>

                    <td>{{ $history->nilai }}</td>

                    <td>{{ $history->created_at }}</td>

                </tr>

                @endforeach

            </table>

        </div>
            <a href="/konselor/dashboard" class="btn btn-secondary">Kembali</a>
    </div>

</div>

</body>
</html>