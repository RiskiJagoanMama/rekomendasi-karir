<!DOCTYPE html>
<html>
<head>

    <title>Balas Konsultasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>Balas Konsultasi</h3>

        </div>

        <div class="card-body">

            <div class="mb-3">

                <label>Nama User</label>

                <input type="text"
                    class="form-control"
                    value="{{ $konsultasi->user->name }}"
                    readonly>

            </div>

            <div class="mb-3">

                <label>Pertanyaan</label>

                <textarea class="form-control"
                    rows="5"
                    readonly>{{ $konsultasi->pesan }}</textarea>

            </div>

            <form action="/konselor/konsultasi/{{ $konsultasi->id }}"
                method="POST">

                @csrf

                <div class="mb-3">

                    <label>Balasan</label>

                    <textarea name="balasan"
                        class="form-control"
                        rows="5"></textarea>

                </div>

                <button class="btn btn-success">

                    Kirim Balasan

                </button>

            </form>

        </div>
        <a href="/konselor/konsultasi" class="btn btn-secondary">Kembali</a>
    </div>

</div>

</body>
</html>