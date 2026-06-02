<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" />
</head>

<body>

<!-- Sidebar -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header bg-teal-100">
            <h2>User</h2>
        </div>
        <div class="navbar-content bg-teal-100">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="{{ route('user.dashboard') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-dashboard"></i>
                    </span>
                    <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../rekomendasi" class="pc-link"
                    ><span class="pc-micon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path fill="currentColor" d="M9 18h5.5q.425 0 .788-.213t.512-.587l2.1-4.9q.05-.125.075-.25T18 11.8V11q0-.425-.288-.713T17 10h-4.6l.6-3.4q.05-.25-.025-.475t-.25-.4L12 5l-4.6 5q-.2.2-.3.45T7 11v5q0 .825.588 1.413T9 18m3 4q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
                    </svg></span><span class="pc-mtext">Rekomendasi</span></a>
                </li>
                <li class="pc-item active">
                    <a href="../konsultasi" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-alert-circle"></i>
                        </span>
                        <span class="pc-mtext">Konsultasi</span>
                    </a>











                    
                </li>
                <li class="pc-item">
                    <a href="../user/history-konsultasi" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-history"></i>
                        </span>
                        <span class="pc-mtext">History Konsultasi</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('user.history') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-clipboard-list"></i>
                        </span>
                        <span class="pc-mtext">History</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="pc-header">
    <div class="ms-auto">
    <ul class="list-unstyled">
      <li class="dropdown pc-h-item header-user-profile">
        <a
          class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0"
          data-bs-toggle="dropdown"
          href="#"
          role="button"
          aria-haspopup="false"
          aria-expanded="false"
        >
          <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
        </a>
        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
          <div class="dropdown-header">
            <h4>
              Welcome,
              <span class="small text-muted">{{ auth()->user()?->name }}</span>
            </h4>
            <p class="text-muted">Rekomendasi Karir</p>
            <hr />
            <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 280px)">
              <hr />
              <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="ti ti-logout"></i>
                  <span>Logout</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</header>
<div class="pc-container">
    <div class="pc-content">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Konsultasi Karir</h3>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="/konsultasi/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Konselor</label>
                                <select name="konselor_id" class="form-control">
                                    @foreach($konselors as $konselor)
                                    <option value="{{ $konselor->id }}">
                                        {{ $konselor->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pertanyaan</label>
                                <textarea name="pesan"
                                          class="form-control"
                                          rows="5"
                                          placeholder="Tulis pertanyaan kamu di sini..."></textarea>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/icon/custom-font.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>


<script>
layout_change('light');
</script>

<script>
font_change('Roboto');
</script>

<script>
change_box_container('false');
</script>

<script>
layout_caption_change('true');
</script>

<script>
layout_rtl_change('false');
</script>

<script>
preset_change('preset-1');
</script>



<!-- [Page Specific JS] start -->
<!-- Apex Chart -->
<script src="../assets/js/plugins/apexcharts.min.js"></script>
<script src="../assets/js/pages/dashboard-default.js"></script>
<!-- [Page Specific JS] end -->

<!-- Main Content -->

</body>
</html>