@extends('layouts.menufasker')

@section('menu-mitra','menu-open')

@section('mitra','active')

@section('data-mitra','active')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Mitra Lokal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/mitra">Pemberdayaan Mitra Lokal</a></li>
            <li class="breadcrumb-item active">Lihat Data Mitra</li>
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
            <h3 class="card-title">Data Mitra Lokal</h3>
          </div>
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama Mitra</label>
                <input type="text" name="nama" value="{{$mitra->nama}}" class="form-control" id="nama" readonly>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Mitra</label>
                    <input type="text" name="alamat" value="{{$mitra->alamat}}" class="form-control" id="alamat" readonly>
                </div>
                <div class="form-group">
                    <label for="izin">Nomor Izin Registrasi</label>
                    <input type="text" name="no_regis_izin" value="{{$mitra->no_regis_izin}}" class="form-control" id="izin" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Program</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="biaya">Pembiayaan</label>
                    <input type="number" name="pembiayaan" value="{{$mitra->pembiayaan}}" class="form-control" id="biaya" readonly>
                </div>
                <div class="form-group">
                  <label for="">Durasi</label>
                  <div class="input-group">
                    <input type="text" name="durasi_awal" value="{{$mitra->durasi_awal}}" class="form-control startdate " data-toggle="datetimepicker" data-target=".startdate" disabled/>
                    <div class="input-group-append">
                      <span class="input-group-text">s/d</span>
                    </div>
                    <input type="text" name="durasi_akhir" value="{{$mitra->durasi_akhir}}" class="form-control enddate " data-toggle="datetimepicker" data-target=".enddate"disabled />
                  </div>
                </div>

                <div class="card-footer">
                    <a class="btn btn-warning" href="{{ url()->previous() }}" role="button"><i class="fas fa-chevron-left"></i> <b>Kembali</b></a>
                </div>
              <!-- /.card-body -->
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection