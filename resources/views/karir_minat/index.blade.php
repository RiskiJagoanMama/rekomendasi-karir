<!DOCTYPE html>
<html>
<head>

    <title>Karir Minat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h2>Data Karir Minat</h2>

        <a href="/karir_minat/create"
        class="btn btn-primary">

            Tambah Data

        </a>

    </div>

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Karir</th>
            <th>Minat</th>
            <th>Bobot</th>
            <th>Aksi</th>

        </tr>

        @foreach($data as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_karir }}</td>

            <td>{{ $item->nama_minat }}</td>

            <td>{{ $item->bobot }}</td>

            <td>

                <a href="/karir_minat/{{ $item->id }}/edit"
                class="btn btn-warning">

                    Edit

                </a>

                <form action="/karir_minat/{{ $item->id }}"
                method="POST"
                style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>
    <div class="mt-3">
            <a href="/admin/dashboard" class="btn btn-secondary">Kembali</a>
    </div>
</div>

</body>
</html>