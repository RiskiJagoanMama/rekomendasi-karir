<!DOCTYPE html>
<html>
<head>

    <title>Edit Minat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Edit Minat</h2>

    <form action="/minat/{{ $minat->id }}"
    method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Minat</label>

            <input type="text"
            name="nama_minat"
            value="{{ $minat->nama_minat }}"
            class="form-control">

        </div>

        <button class="btn btn-success">

            Update

        </button>
        <a href="/minat" class="btn btn-secondary">Kembali</a>
    </form>

</div>

</body>
</html>