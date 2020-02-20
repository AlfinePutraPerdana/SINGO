@extends('layouts.menubar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Keuangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Keuangan</li>
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
            <h3 class="card-title">Laporan Keuangan</h3>
          </div>
          @foreach ($data as $d)
          <form action="/lk/update" role="form" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="card-body">
            <input type="hidden" name="id" value="{{ $d -> id}}">
                <div class="form-group">
                  <label for="">Judul Laporan</label>
                  <input name="nama" type="text" class="form-control" value="{{$d -> nama}}">
                </div>
                <div class="form-group">
                  <label for="">Rencana Induk Kegiatan</label>
                  <select name="id_rik" id="id_rik" class="form-control">
                    <option value="" selected>Pilih RIK</option>
                    <option value="1">options 1</option>
                    <option value="2">options 2</option>
                    <option value="3">options 3</option>
                    <option value="4">options 4</option>
                    <option value="5">options 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Rencana Kerja Tahunan</label>
                  <select name="id_rkt" id="id_rkt" class="form-control">
                    <option value="" selected>Pilih RKT</option>
                    <option value="">options 1</option>
                    <option value="">options 2</option>
                    <option value="">options 3</option>
                    <option value="">options 4</option>
                    <option value="">options 5</option>
                  </select>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="">Pembiayaan</label>
                    <select name="mata_uang" id="mata_uang" class="form-control">
                      <option value="" selected>Pilih Mata Uang Asing</option>
                      <option value="">options 1</option>
                      <option value="">options 2</option>
                      <option value="">options 3</option>
                      <option value="">options 4</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Besar Nominal</label>
                  <input name="nominal_asing" type="number" class="form-control" value="{{$d -> nominal_asing}}">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="">Pembiayaan(Rp)</label>
                  <input name="nominal_lokal" type="number" class="form-control" value="{{$d -> nominal_lokal}}">
                </div>
                <div class="form-group">
                  <label for="file">Unggah Laporan Keuangan</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input name="rincian" type="file" class="custom-file-input" id="keuangan">
                      <label class="custom-file-label" for="file">{{$d -> rincian}}</label>
                    </div>
                  </div>
                </div>
            </div>
                
            <div class="card-footer">
                <input class="btn btn-primary" type="submit">
            </div>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  </section>
</div>
@endsection