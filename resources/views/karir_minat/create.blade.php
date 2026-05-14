<!DOCTYPE html>
<html>
<head>

    <title>Tambah Karir Minat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Tambah Data</h2>

    <form action="/karir_minat"
    method="POST">

        @csrf

        <div class="mb-3">

            <label>Karir</label>

            <select name="karir_id"
            class="form-control">

                @foreach($karirs as $karir)

                <option value="{{ $karir->id }}">

                    {{ $karir->nama_karir }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Minat</label>

            <select name="minat_id"
            class="form-control">

                @foreach($minats as $minat)

                <option value="{{ $minat->id }}">

                    {{ $minat->nama_minat }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Bobot</label>

            <input type="number"
            name="bobot"
            class="form-control">

        </div>

        <button class="btn btn-primary">

            Simpan

        </button>
        <a href="/karir_minat" class="btn btn-secondary">Kembali</a>
    </form>

</div>

</body>
</html>