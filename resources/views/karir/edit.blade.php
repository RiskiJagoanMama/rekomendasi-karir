<!DOCTYPE html>
<html>
<head>

    <title>Edit Karir</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Edit Karir</h2>

    <form action="/karir/{{ $karir->id }}"
    method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Karir</label>

            <input type="text"
            name="nama_karir"
            value="{{ $karir->nama_karir }}"
            class="form-control">

        </div>

        <div class="mb-3">

            <label>Deskripsi</label>

            <textarea
            name="deskripsi"
            class="form-control">{{ $karir->deskripsi }}</textarea>

        </div>

        <button class="btn btn-success">

            Update

        </button>
         <a href="/karir" class="btn btn-secondary">Kembali</a>

    </form>

</div>

</body>
</html>