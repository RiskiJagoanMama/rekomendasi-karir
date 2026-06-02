<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Dashboard Admin</title>

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
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header bg-teal-100">
        <h2>Admin</h2>
    </div>
    <div class="navbar-content bg-teal-100">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="{{ route('admin.dashboard') }}" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-dashboard"></i></span><span class="pc-mtext">Dashboard</span></a>
        </li>
        <li class="pc-item">
        <a href="/admin/data-user" class="pc-link">
          <span class="pc-micon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
          <path d="M0 0h48v48H0z" fill="none" />
          <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
          <path d="M22 8v12c0 2.21-4.03 4-9 4s-9-1.79-9-4V8" />
          <path d="M22 14c0 2.21-4.03 4-9 4s-9-1.79-9-4m18-6c0 2.21-4.03 4-9 4s-9-1.79-9-4s4.03-4 9-4s9 1.79 9 4m10-2h6a4 4 0 0 1 4 4v6M16 42h-6a4 4 0 0 1-4-4v-6" />
          <circle cx="35" cy="29" r="5" />
          <path d="M44 44H26a9 9 0 1 1 18 0" />
          </g>
          </svg></i></span><span class="pc-mtext">Data User</span></a>
        </li>
        <li class="pc-item">
        <a href="/admin/data-konselor" class="pc-link">
          <span class="pc-micon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
	<path d="M0 0h48v48H0z" fill="none" />
	<defs>
		<mask id="SVGloZNbXBY">
			<g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
				<path d="M22 8v12c0 2.21-4.03 4-9 4s-9-1.79-9-4V8" />
				<path d="M22 14c0 2.21-4.03 4-9 4s-9-1.79-9-4" />
				<path fill="#555" d="M22 8c0 2.21-4.03 4-9 4s-9-1.79-9-4s4.03-4 9-4s9 1.79 9 4" />
				<path d="M32 6h6a4 4 0 0 1 4 4v6M16 42h-6a4 4 0 0 1-4-4v-6" />
				<circle cx="35" cy="29" r="5" fill="#555" />
				<path fill="#555" d="M44 44H26a9 9 0 1 1 18 0" />
          </g>
          </mask>
          </defs>
          <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#SVGloZNbXBY)" />
          </svg>
          </i></span><span class="pc-mtext">Data Konselor</span></a>
        </li>
        <li class="pc-item">
          <a href="../minat" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-sitemap"></i></span><span class="pc-mtext">Minat</span></a>
        </li>
        <li class="pc-item">
          <a href="../skill" class="pc-link"
            ><span class="pc-micon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32">
	          <path d="M0 0h32v32H0z" fill="none" />
	          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m18 13l8-11L8 13l6 6l-8 11l18-11Z" />
            </svg>
            </i></span><span class="pc-mtext">Skill</span></a>
        </li>
        <li class="pc-item">
          <a href="../karir" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-chart-bar"></i></span><span class="pc-mtext">Karir</span></a>
        </li>
        <li class="pc-item">
          <a href="../karir_skill" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-toggle-left"></i></span><span class="pc-mtext">Karir Skill</span></a>
        </li>
        <li class="pc-item">
          <a href="../karir_minat" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-toggle-right"></i></span><span class="pc-mtext">Karir Minat</span></a>
        </li>
        <li class="pc-item">
        <a href="/admin/history" class="pc-link">
          <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span><span class="pc-mtext">History User</span></a>
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
<!-- [ Header ] end -->

 <!-- Required Js -->
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
  </body>
  <!-- [Body] end -->
</html>
