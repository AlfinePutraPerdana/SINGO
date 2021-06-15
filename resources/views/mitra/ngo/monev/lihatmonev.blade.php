@extends('layouts.menubar')


@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengajuan Monev</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengajuan Monev</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Pengajuan Monev <a href="/tambah-monev/new" type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> <b>Tambah</b></a></h3>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
            <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 500px;">
            <form action="">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Program</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <th>Pilih</th>
                  </tr>
                </thead>
                <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($monev as $monev)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $monev -> nama }}</td>
                    <td><span class="badge badge-pill badge-warning">Dalam Proses</span></td>
                    <td>
                      <a href="/edit-monev/{{ $monev -> id }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>Ubah</b></a>
                      <a href="/delete-monev/{{ $monev -> id }}" onclick="return confirm('Anda yakin?')" class="btn btn-sm btn-danger" style="color:#fff"><i class="fas fa-edit"></i> <b>Hapus</b></a>
                    </td>
                    <td>
                      <div class="icheck-success d-inline">
                        <input type="checkbox" id="pilih1">
                        <label for="pilih1"></label>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </form>
          </div>
            <!-- /.card-body -->
          <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            <div class="float-left">
                <a href="" role="button" class="btn btn-primary"><i class="far fa-paper-plane"></i> <b>Kirim</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

