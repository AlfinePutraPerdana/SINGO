@extends('layouts.menufasker')

@section('menu-akun','menu-open')

@section('kelola','active')

@section('data-satker','active')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Akun Satker</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/list-satker">Daftar Akun</a></li>
              <li class="breadcrumb-item active">Edit Akun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Registrasi Akun</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" id="formtenaga" data-parsley-validate >
                            {{ csrf_field() }}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap"   data-parsley-required data-parsley-trigger="keyup">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" data-parsley-required data-parsley-trigger="keyup">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email"  data-parsley-required data-parsley-trigger="keyup">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" data-parsley-required data-parsley-type="date" data-parsley-trigger="keyup"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="Confirm Password"  data-parsley-required data-parsley-trigger="keyup">
                                </div>
                                <div class="form-group">
                                    <label for="no-telp">No telp</label>
                                    <input type="text" name="no_telp" class="form-control" id="no-telp" placeholder="No telephone" data-parsley-required data-parsley-trigger="keyup">
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <input type="number" name="level" class="form-control" id="level" placeholder="Level" data-parsley-required data-parsley-trigger="keyup">
                                </div>

                                
                      
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit"><i class="far fa-save"></i> <b>Simpan</b></button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection