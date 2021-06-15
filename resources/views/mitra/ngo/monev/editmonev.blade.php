@extends('layouts.menubar')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Pengajuan Monev</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/tambah-monev">Daftar Pengajuan Monev</a></li>
            <li class="breadcrumb-item active">Edit Monev</li>
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
            <h3 class="card-title">Data Monev</h3>
          </div>
            <form action="/edit-monev/update" method="post" role="form" enctype="multipart/form-data">
            @foreach ($data as $d)
            {{ csrf_field() }}
              <div class="card-body">
                <input type="hidden" name="id" value="{{ $d -> id}}">
                <input type="hidden" name="tanggapan" value="0">
                <div class="form-group">
                    <label>Nama Program</label>
                    <input type="text" name="nama" class="form-control" value="{{ $d -> nama }}">
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" name="city_id" class="form-control" id="kabupaten" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Waktu</label>
                  <div class="input-group">
                    <input type="text" name="tgl_mulai" value="{{ $d -> tgl_mulai }}" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate" />
                    <div class="input-group-append">
                      <span class="input-group-text">s/d</span>
                    </div>
                    <input type="text" name="tgl_selesai" value="{{ $d -> tgl_selesai }}" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="file">Unggah Jadwal</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input name="jadwal" type="file" class="custom-file-input" id="jadwal">
                      <label class="custom-file-label" for="file">{{ $d -> jadwal }}</label>
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <input class="btn btn-primary" type="submit">
                </div>
              <!-- /.card-body -->
              </div>
            @endforeach
            </form>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection