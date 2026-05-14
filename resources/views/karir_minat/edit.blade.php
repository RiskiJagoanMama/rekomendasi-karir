<!DOCTYPE html>
<html>
<head>

    <title>Edit Karir Minat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Edit Data Karir Minat</h2>

    <form action="/karir_minat/{{ $data->id }}"
    method="POST">

        @csrf
        @method('PUT')

        <!-- KARIR -->
        <div class="mb-3">

            <label>Karir</label>

            <select name="karir_id"
            class="form-control">

                @foreach($karirs as $karir)

                <option value="{{ $karir->id }}"

                {{ $data->karir_id == $karir->id ? 'selected' : '' }}>

                    {{ $karir->nama_karir }}

                </option>

                @endforeach

            </select>

        </div>

        <!-- MINAT -->
        <div class="mb-3">

            <label>Minat</label>

            <select name="minat_id"
            class="form-control">

                @foreach($minats as $minat)

                <option value="{{ $minat->id }}"

                {{ $data->minat_id == $minat->id ? 'selected' : '' }}>

                    {{ $minat->nama_minat }}

                </option>

                @endforeach

            </select>

        </div>

        <!-- BOBOT -->
        <div class="mb-3">

            <label>Bobot</label>

            <input type="number"
            name="bobot"
            value="{{ $data->bobot }}"
            class="form-control">

        </div>

        <button class="btn btn-success">

            Update

        </button>

        <a href="/karir_minat"
        class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>

</body>
</html>