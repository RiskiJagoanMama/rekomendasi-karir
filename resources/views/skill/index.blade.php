<!DOCTYPE html>
<html>
<head>

    <title>Data Skill</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h2>Data Skill</h2>

        <a href="/skill/create"
        class="btn btn-primary">

            Tambah Skill

        </a>

    </div>

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nama Skill</th>
            <th>Aksi</th>

        </tr>

        @foreach($skill as $skill)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $skill->nama_skill }}</td>

            <td>

                <a href="/skill/{{ $skill->id }}/edit"
                class="btn btn-warning">

                    Edit

                </a>

                <form action="/skill/{{ $skill->id }}"
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