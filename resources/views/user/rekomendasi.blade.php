<!DOCTYPE html>
<html>
<head>

    <title>Rekomendasi Karir</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>Rekomendasi Karir</h3>

        </div>

        <div class="card-body">

            <form action="/rekomendasi/proses"
            method="POST">

                @csrf

                <div class="row">

                    <!-- SKILL -->
                    <div class="col-md-6">

                        <h4>Pilih Skill</h4>

                        @foreach($skills as $skill)

                        <div class="form-check">

                            <input type="checkbox"
                            name="skill[]"
                            value="{{ $skill->id }}"
                            class="form-check-input">

                            <label class="form-check-label">

                                {{ $skill->nama_skill }}

                            </label>

                        </div>

                        @endforeach

                    </div>

                    <!-- MINAT -->
                    <div class="col-md-6">

                        <h4>Pilih Minat</h4>

                        @foreach($minats as $minat)

                        <div class="form-check">

                            <input type="checkbox"
                            name="minat[]"
                            value="{{ $minat->id }}"
                            class="form-check-input">

                            <label class="form-check-label">

                                {{ $minat->nama_minat }}

                            </label>

                        </div>

                        @endforeach

                    </div>

                </div>

                <button class="btn btn-primary mt-4">

                    Proses
            
                </button>
            </form>

        </div>
<a href="/user/dashboard" class="btn btn-secondary">Kembali</a>
    </div>

</div>

</body>
</html>