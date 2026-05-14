<!DOCTYPE html>
<html>
<head>

    <title>Data Minat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h2>Data Minat</h2>

        <a href="/minat/create"
        class="btn btn-primary">

            Tambah Minat

        </a>

    </div>

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nama Minat</th>
            <th>Aksi</th>

        </tr>

        @foreach($minat as $minat)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $minat->nama_minat }}</td>

            <td>

                <a href="/minat/{{ $minat->id }}/edit"
                class="btn btn-warning">

                    Edit

                </a>

                <form action="/minat/{{ $minat->id }}"
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