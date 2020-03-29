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
            <h1>Kelola Akun </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Akun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Akun</h3>  
                
              <div class="card-tools">
                <form action="#" method="GET">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 350px;">
                {{ csrf_field() }}
                <table class="table table-head-fixed">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Username</th> 
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                      <tr align="center">
                        <td> 1 </td>
                        <td>Satuan Kerja </td>
                        <td>Satuan_Kerja01</td>
                        <td><a href="/list-satker/edit"  class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Ubah</a></td>
                      </tr>
                  </tbody>
                </table>
            </div>
                <div class="card-footer clearfix">
                    <a href="/tambah-akun" class="btn btn-primary"><i class="fas fa-plus-circle"></i> <b>Tambah</b></a>
                    <ul class="pagination pagination-sm m-0 float-right">
                      
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
    
