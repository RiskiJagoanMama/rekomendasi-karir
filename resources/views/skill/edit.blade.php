<!DOCTYPE html>
<html>
<head>

    <title>Edit Skill</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Edit Skill</h2>

    <form action="/skill/{{ $skill->id }}"
    method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Skill</label>

            <input type="text"
            name="nama_skill"
            value="{{ $skill->nama_skill }}"
            class="form-control">

        </div>

        <button class="btn btn-success">

            Update

        </button>
        <a href="/skill" class="btn btn-secondary">Kembali</a>
    </form>

</div>

</body>
</html>