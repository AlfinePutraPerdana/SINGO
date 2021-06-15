<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SINGO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets_fas/plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets_fas/plugins/datepicker/libraries/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Ionicons -->
<link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets_fas/dist/css/adminlte.css')}}">

  <!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('assets_fas/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<!-- Toastr -->
<link rel="stylesheet" href="{{asset('assets_fas/plugins/toastr/toastr.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
<link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets_fas/plugins/summernote/summernote-lite.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('assets_fas/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            <img src="{{asset('assets_fas/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets_fas/dist/img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SINGO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets_fas/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} - Fasker</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/fasker" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beranda</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @yield('menu-akun')">
            <a href="" class="nav-link @yield('kelola')">
              <i class="nav-icon  far fa-user-circle"></i>
              <p>
                Kelola Akun
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/list-satker" class="nav-link @yield('data-satker')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Akun</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @yield('menu-open')">
            <a href="#" class="nav-link @yield('menu-verif')">
              <i class="nav-icon  far fa-list-alt"></i>
              <p>
                Verifikasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/verif-akun" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Verifikasi Akun NGO</p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="/verif-tenaga-asing" class="nav-link @yield('verif-tenaga')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Tenaga Asing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/verif-tamu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Tamu Asing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/verif-bebas-pajak" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Bebas Pajak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/verif-mitra-lokal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Instansi Lokal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Pengajuan-monev" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Monev</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/artikel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Dokumentasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @yield('menu-rkt')">
            <a href="" class="nav-link @yield('rencana')">
              <i class="nav-icon  far fa-file-alt"></i>
              <p>
                Rencana Kerja Tahunan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="/master-rkt" class="nav-link @yield('data-rkt')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rencana Kerja</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @yield('menu-tenaga')">
            <a href="" class="nav-link @yield('rekomendasi')">
              <i class="nav-icon  far fa-user-circle"></i>
              <p>
                Rekomendasi Tenaga
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/master-tenaga-asing" class="nav-link @yield('data-tenaga')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tenaga Asing</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon  far fa-id-badge"></i>
              <p>
                Pemberitahuan Tamu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/master-tamu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tamu Asing</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @yield('menu-mitra')">
            <a href="#" class="nav-link @yield('mitra')">
              <i class="nav-icon  far fa-building"></i>
              <p>
                Mitra Lokal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/master-mitra" class="nav-link @yield('data-mitra')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Instansi Lokal</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/master-ngo" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Daftar NGO</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon  far fa-file"></i>
              <p>
                Monev
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/monev" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Pengajuan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon  fas fa-archive"></i>
              <p>
                Induk Kegiatan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/master-rik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rencana Induk Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/rik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dokumen Induk Kegiatan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon  far fa-clipboard"></i>
              <p>
                Laporan Tahunan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/ltk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/lk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Keuangan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->


        
          
          @yield('content')

        
           







  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<!-- ./wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; SINGO.</strong>
  All rights reserved.
</footer>

<!-- jQuery -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
<script src="{{asset('assets_fas/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets_fas/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets_fas/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets_fas/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets_fas/plugins/summernote/summernote-lite.min.js')}}"></script>

<script src="{{asset('assets_fas/plugins/datepicker/libraries/moment/moment.min.js')}}"></script>

<script src="{{asset('assets_fas/plugins/datepicker/libraries/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('assets_fas/plugins/datepicker/js/custom.js')}}"></script>

<script src="{{ asset('assets_fas/plugins/toastr/toastr.min.js') }}"></script>

<script src="{{asset('assets_fas/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

@stack('script')

<script>
    $(document).ready(function () {
      //Add text editor
      $('#pendahuluan').summernote()
      $('#penutup').summernote()
      $('#upaya').summernote()
      $('#hasil').summernote()
      $('#sasaran').summernote()
      $('#tujuan').summernote()
      $('#daerah').summernote()
      $('#diharapkan').summernote()
      $('#pihak').summernote()
      $('#dana').summernote()
      $('#lokasi').summernote()
      $('#kegiatan').summernote()
      $('#tenaga').summernote()
      $('#tenaga-asing').summernote()
      $('#catatan').summernote()
    });
</script>

<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
  });
</script>

<script>
  @if (Session::has('sukses'))
      toastr.success("{{Session::get('sukses')}}","Sukses");
   @endif
</script>

<script type="application/javascript">
  $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
});
</script>


</body>
</html>
