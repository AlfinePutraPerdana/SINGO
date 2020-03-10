@extends('layouts.menubar')

@section('permintaan','active')

@section('open','menu-open')

@section('tambah-mitra','active')
 
    
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemberdayaan Mitra Lokal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/tambah-mitra">Tambah Mitra</a></li>
              <li class="breadcrumb-item active">Ubah Mitra</li>
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
                <h3 class="card-title">Form Pemberdayaan Mitra</h3>
              </div>
              {{-- @foreach ($mitra as $m) --}}
              <form role="form" action="/tambah-mitra/update" data-parsley-validate method="POST">
                @csrf
                <div class="card-body">
                  <input type="hidden" name="id" class="form-control" id="id" value="{{ $mitra -> mitra_id }}"> 
                  <input type="hidden" name="id" class="form-control" id="id" value="{{ $mitra -> instansi_id }}"> 
                  <div class="form-group">
                        <label for="nama">Nama Mitra</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mitra" value="{{ $mitra -> nama }}" data-parsley-required data-parsley-trigger="keyup">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Mitra</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Mitra" value="{{ $mitra -> alamat }}" data-parsley-required data-parsley-trigger="keyup">
                    </div>
                    <div class="form-group">
                        <label for="registrasi">Nomor Izin Registrasi</label>
                        <input type="text" name="no_regis_izin" class="form-control" id="registrasi" placeholder="Nomor Registrasi" value="{{ $mitra -> no_regis_izin }}" data-parsley-required data-parsley-trigger="keyup">
                    </div>
                    <div class="form-group">
                    <label>Nama Program</label>
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pembiayaan</label>
                    <input type="number" name="pembiayaan" value="{{$mitra -> pembiayaan}}" class="form-control" id="biaya2" data-parsley-required data-parsley-trigger="keyup">
                    </div>
                    <div class="form-group">
                        <label for="">Durasi</label>
                        <div class="input-group">
                            <input type="text" name="durasi_awal" value="{{$mitra -> durasi_awal}}" class="form-control startdate2 " data-toggle="datetimepicker" data-target=".startdate2"/>
                            <div class="input-group-append">
                            <span class="input-group-text">s/d</span>
                            </div>
                            <input type="text" name="durasi_akhir" value="{{$mitra -> durasi_akhir}}" class="form-control enddate2 " data-toggle="datetimepicker" data-target=".enddate2" data-parsley-required data-parsley-type="date" data-parsley-trigger="keyup"/>
                        </div>
                    </div>
                  <div class="card-footer">
                    <a class="btn btn-warning" href="{{ url()->previous() }}" role="button"><i class="fas fa-chevron-left"></i> <b>Kembali</b></a>
                    <button class="btn btn-primary" type="submit"><i class="far fa-save"></i> <b>Simpan</b></button>
                  </div>  
              </form>
              {{-- @endforeach --}}
            </div>
          </div>
        </div>
    </section>  
</div>
@endsection