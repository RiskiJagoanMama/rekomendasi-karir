<!DOCTYPE html>
<html>
<head>

    <title>Data Karir</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h2>Data Karir</h2>
        
        <a href="/karir/create" class="btn btn-primary">

            Tambah Data

        </a>
    </div>

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nama Karir</th>
            <th>Deskripsi</th>
            <th>Aksi</th>

        </tr>

        @foreach($karirs as $karir)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $karir->nama_karir }}</td>

            <td>{{ $karir->deskripsi }}</td>

            <td>

                <a href="/karir/{{ $karir->id }}/edit"
                class="btn btn-warning">

                    Edit

                </a>

                <form action="/karir/{{ $karir->id }}"
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