<!DOCTYPE html>
<html>
<head>

    <title>Konsultasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>Konsultasi Karir</h3>

        </div>

        <div class="card-body">

            @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

            @endif

            <form action="/konsultasi/store"
                method="POST">

                @csrf

                <div class="mb-3">

                    <label>Konselor</label>

                    <select name="konselor_id"
                        class="form-control">

                        @foreach($konselors as $konselor)

                        <option value="{{ $konselor->id }}">

                            {{ $konselor->name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label>Pertanyaan</label>

                    <textarea name="pesan"
                        class="form-control"
                        rows="5"></textarea>

                </div>

                <button class="btn btn-primary">

                    Kirim Pertanyaan

                </button>

            </form>

        </div>
        <a href="/user/dashboard" class="btn btn-secondary">Kembali</a>
    </div>

</div>

</body>
</html>