<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <title>Regulasi Praktik Kerja Lapangan</title>
    

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" integrity="sha384-rbs5v5b3e3R7O9Sz8a+jl7z5F5/iZ5i1q5CB/iYAySBLC2BKmPQSkj5fBu5Q8YU" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
   
    
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
  
    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    
    <!--pengkondisian validasi frim-->
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

      <!-- Github Link -->
      <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
        <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
            </linearGradient>
          </defs>
          <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
        </svg>
        <i class="mdi mdi-github-circle"></i>
      </a>




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/dashboard" title="Sleek Dashboard">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33">
                  <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>

                <span class="brand-name text-truncate">Regulasi PKL</span>
              </a>
            </div>

            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="dashboard" data-parent="#sidebar-menu">
                    <div class="sub-menu">


                      <li class="">
                        <a class="sidenav-item-link" href="/data-user">
                          <span class="nav-text">User</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="/kelompok-adm">
                          <span class="nav-text">Kelompok</span>
                        </a>
                      </li>

                    </div>
                  </ul>
                </li>

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                    aria-expanded="false" aria-controls="app">
                    <i class="mdi mdi-pencil-box-multiple"></i>
                    <span class="nav-text">Data</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="app" data-parent="#sidebar-menu">
                    <div class="sub-menu">

                      <li class="">
                        <a class="sidenav-item-link" href="/dosen-adm">
                          <span class="nav-text">Dosen</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="/instansi-adm">
                          <span class="nav-text">Instansi</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="/mahasiswa-adm">
                          <span class="nav-text">Mahasiswa</span>
                        </a>
                      </li>
                      


                    </div>
                  </ul>
                </li>

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                    aria-expanded="false" aria-controls="forms">
                    <i class="mdi mdi-email-mark-as-unread"></i>
                    <span class="nav-text">Surat</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="forms" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="/surat-adm">
                          <span class="nav-text">Pengajuan</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>

                <!-- <li class="section-title">
                  UI Elements
                </li> -->

                {{-- <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                    aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">Charts</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="charts" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="chartjs.html">
                          <span class="nav-text">ChartJS</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li> --}}

                <!-- <li class="section-title">
                  Pages
                </li> -->

                {{-- <li class="has-sub active expand">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                    aria-expanded="false" aria-controls="documentation">
                    <i class="mdi mdi-book-open-page-variant"></i>
                    <span class="nav-text">Documentation</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse show" id="documentation" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="section-title">
                        Getting Started
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="introduction.html">
                          <span class="nav-text">Introduction</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="quick-start.html">
                          <span class="nav-text">Quick Start</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="customization.html">
                          <span class="nav-text">Customization</span>
                        </a>
                      </li>

                      <li class="section-title">
                        Layouts
                      </li>

                      <li class="has-sub ">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#header-variations" aria-expanded="false" aria-controls="header-variations">
                          <span class="nav-text">Header Variations</span> <b class="caret"></b>
                        </a>

                        <ul class="collapse " id="header-variations">
                          <div class="sub-menu">
                            <li class="">
                              <a href="header-fixed.html">Header Fixed</a>
                            </li>

                            <li class="">
                              <a href="header-static.html">Header Static</a>
                            </li>

                            <li class="">
                              <a href="header-light.html">Header Light</a>
                            </li>

                            <li class="">
                              <a href="header-dark.html">Header Dark</a>
                            </li>
                          </div>
                        </ul>
                      </li>

                      <li class="has-sub active expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-variations" aria-expanded="false" aria-controls="sidebar-variations">
                          <span class="nav-text">Sidebar Variations</span> <b class="caret"></b>
                        </a>

                        <ul class="collapse show" id="sidebar-variations">
                          <div class="sub-menu">
                            <li class="">
                              <a href="sidebar-fixed-default.html">Sidebar Fixed Default</a>
                            </li>

                            <li class="">
                              <a href="sidebar-fixed-minified.html">Sidebar Fixed Minified</a>
                            </li>

                            <li class="">
                              <a href="sidebar-fixed-offcanvas.html">Sidebar Fixed Offcanvas</a>
                            </li>

                            <li class="active">
                              <a href="sidebar-static-default.html">Sidebar Static Default</a>
                            </li>

                            <li class="">
                              <a href="sidebar-static-minified.html">Sidebar Static Minified</a>
                            </li>

                            <li class="">
                              <a href="sidebar-static-offcanvas.html">Sidebar Static Offcanvas</a>
                            </li>

                            <li class="">
                              <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                            </li>

                            <li class="">
                              <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                            </li>

                            <li class="">
                              <a href="right-sidebar.html">Right Sidebar</a>
                            </li>
                          </div>
                        </ul>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="rtl.html">
                          <span class="nav-text">RTL Direction</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li> --}}

                <!-- <li class="section-title">
                  Documentation
                </li> -->
              </ul>
            </div>

            <div class="sidebar-footer">
              <hr class="separator mb-0" />
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>

                <div class="progress progress-xs">
                  <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                </div>

                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>

                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                </div>
              </div>
            </div>
          </div>
        </aside>


          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">
          
          <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                {{-- <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div> --}}
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu custom-dropdown">
                    {{-- <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline"></i>
                    </button> --}}

                    {{-- <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                      <div class="card-header card-header-border-bottom px-3">
                        <h2>Notifications</h2>
                      </div> --}}

                  </li>
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">{{Auth::user()->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                        {{Auth::user()->name}} <small class="pt-1">{{Auth::user()->email}}</small>
                        </div>
                      </li>

                      {{-- <li>
                        <a href="">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li> --}}

                      <li class="dropdown-footer">
                        <a href="{{route('logout-admin')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>

          
          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
            <div class="content">

@yield('content')

      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
    
    <!-- Footer -->
    <footer class="footer mt-auto">
      <div class="copyright bg-white">
        <p>
          Copyright &copy; <span id="copy-year"></span> a template by <a class="text-primary" href="https://themefisher.com" target="_blank">Themefisher</a>.
        </p>
      </div>
      <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
      </script>
    </footer>

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
 
    


    <!-- <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script> -->
    <script src='assets/plugins/data-tables/datatables.bootstrap4.min.js'></script>

    

    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
<script>
   jQuery(document).ready(function() {
  jQuery('#basic-data-table').DataTable({
   "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
  });
 });
</script>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function () {
    $('#tabel-dosen').DataTable({paging: true,  pageLength: 5});
    $('#tabel-mhs').DataTable({paging: true,  pageLength: 5});
    $('#tabel-user').DataTable({paging: true,  pageLength: 5});
    $('#tabel-kelompok').DataTable({paging: true,  pageLength: 5});
    $('#tabel-instansi').DataTable({paging: true,  pageLength: 5});
  });
</script>



</html>

