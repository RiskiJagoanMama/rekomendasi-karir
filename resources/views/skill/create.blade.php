<!DOCTYPE html>
<html>
<head>

    <title>Tambah Skill</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Tambah Skill</h2>

    <form action="/skill"
    method="POST">

        @csrf

        <div class="mb-3">

            <label>Nama Skill</label>

            <input type="text"
            name="nama_skill"
            class="form-control">

        </div>

        <button class="btn btn-primary">

            Simpan

        </button>
        <a href="/skill" class="btn btn-secondary">Kembali</a>
    </form>

</div>

</body>
</html>