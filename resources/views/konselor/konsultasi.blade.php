<!DOCTYPE html>
<html>
<head>

    <title>Konsultasi Konselor</title>

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
        <h2>Konselor</h2>
    </div>
    <div class="navbar-content bg-teal-100">
      <ul class="pc-navbar">
        <li class="pc-item">
            <a href="{{ route('konselor.dashboard') }}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-dashboard"></i></span><span class="pc-mtext">Dashboard</span></a>
        </li>
        <li class="pc-item">
            <a href="../konselor/konsultasi" class="pc-link">
                <span class="pc-micon"><i class="ti ti-alert-circle"></i></span><span class="pc-mtext">Konsultasi</span></a>
        </li>
        <li class="pc-item">
            <a href="{{ route('konselor.history')}}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-history"></i></span><span class="pc-mtext">History Karir User</span></a>
        </li>
     </ul> 
    </div>
  </div>
</nav>

 <!-- [ Header Topbar ] start -->
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
          <img src="../assets/images/user/avatar-7.jpg" alt="user-image" class="user-avtar" />
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
<!-- [ Header ] end -->
<div class="pc-container">
    <div class="pc-content">
        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3>Daftar Konsultasi User</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Pertanyaan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($konsultasis as $konsultasi)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $konsultasi->user->name }}
                            </td>
                            <td>
                                {{ $konsultasi->pesan }}
                            </td>
                            <td>
                                {{ $konsultasi->status }}
                            </td>
                            <td>
                                <a href="/konselor/konsultasi/{{ $konsultasi->id }}"class="btn btn-primary">Balas</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
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