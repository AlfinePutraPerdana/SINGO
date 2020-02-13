@extends('layouts.menubar')


@section('content')

<!--<tambah-laporan></tambah-laporan>-->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Tahunan</li>
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
            <h3 class="card-title">Form Laporan Tahunan</h3>
          </div>
          <form action="/ltk/store" role="form" method="post">
          {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                  <label for="">Judul Laporan</label>
                  <input name="judul" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Rencana Kegiatan Tahunan</label>
                  <select name="id_rkt" id="id_rkt" class="form-control">
                    <option selected>Pilih Kegiatan</option>
                    <option value="waw">options 1</option>
                    <option value="wew">options 2</option>
                    <option value="wiw">options 3</option>
                    <option value="wow">options 4</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Pendahuluan</label>
                    <textarea name="pendahuluan" id="pendahuluan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Tujuan</label>
                    <textarea name="tujuan" id="tujuan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Sasaran</label>
                    <textarea name="sasaran" id="sasaran" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Capaian</label>
                    <textarea name="capaian" id="capaian" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Peran Peserta</label>
                    <textarea name="peran_serta" id="peran" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-6">
                      <label>Pembiayaan</label>
                      <select name="matauang_id" class="form-control">
                        <option selected>Pilih Mata Uang</option>
                        <option value="1">option 2</option>
                        <option value="2">option 3</option>
                        <option value="3">option 4</option>
                        <option value="4">option 5</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="">Besar Nominal</label>
                      <input name="nominal_biaya" type="number" class="form-control" id="nominal" placeholder="Masukan nominal">
                    </div>
                </div>
                <div class="form-group">
                  <label for="">Permasalahan</label>
                  <textarea name="permasalahan" id="masalah" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                  </textarea>
                </div>
                <div class="form-group">
                  <label for="">Upaya Pemecahan Masalah</label>
                  <textarea name="upaya_pemecahan" id="upaya" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                  </textarea>
                </div>
                <div class="form-group">
                  <label for="">Penutup</label>
                  <textarea name="penutup" id="penutup" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                  </textarea>
                </div>
                <div class="form-group">
                  <label for="file">Lampiran File</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input name="lampiran" type="file" class="custom-file-input" id="file" required>
                      <label class="custom-file-label" for="file"></label>
                    </div>
                  </div>
                </div>
              </div>
                
            <div class="card-footer">
              <input class="btn btn-primary" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
      
@endsection






