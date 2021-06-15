@extends('layouts.menubar')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center image">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('assets_be/dist/img/profile.png')}}"
                       class="img-circle elevation-2"
                       alt="User profile picture">
                </div>

                    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                

                <p class="text-muted text-center">{{ Auth::user()->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Nama organisasi</b> <p class="float-right">{{ $instansis->nama }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Asal Negara</b> <p class="float-right">{{ $instansis->negara }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Nomor Registrasi Izin</b> <p class="float-right">{{ $instansis->no_regis_izin }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Country Director</b> <p class="float-right">{{ $ngo->country_director }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <p class="float-right">{{ $instansis->alamat }} </p>
                  </li>
                  <li class="list-group-item">
                    <b>Nomor telepon</b> <p class="float-right">{{ $ngo->no_telp }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Faximile</b> <p class="float-right">{{ $ngo->fax }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <p class="float-right">{{ $ngo->email }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Website</b> <p class="float-right">{{ $ngo->website }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Bidang Kerja</b> <p class="float-right">{{ $ngo->bidang_kerja }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Mulai Beroperasi</b> <p class="float-right">{{ $ngo->mulai_beroperasi }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>tanggal Penandatanganan MSP terakhir</b> <p class="float-right">{{ $ngo->tgl_ttd_msp }}</p>
                  </li>
                  <li class="list-group-item">
                    <b>Lokasi Kerja Sama</b> <p class="float-right">{{ $ngo->lokasi_kerja_sama }}</p>
                  </li>
                </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection