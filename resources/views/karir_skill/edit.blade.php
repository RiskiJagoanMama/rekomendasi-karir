<!DOCTYPE html>
<html>
<head>

    <title>Edit Karir Skill</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Edit Data Karir Skill</h2>

    <form action="/karir_skill/{{ $data->id }}"
    method="POST">

        @csrf
        @method('PUT')

        <!-- PILIH KARIR -->
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

        <!-- PILIH SKILL -->
        <div class="mb-3">

            <label>Skill</label>

            <select name="skill_id"
            class="form-control">

                @foreach($skills as $skill)

                <option value="{{ $skill->id }}"

                    {{ $data->skill_id == $skill->id ? 'selected' : '' }}>

                    {{ $skill->nama_skill }}

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

        <a href="/karir_skill"
        class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>

</body>
</html>