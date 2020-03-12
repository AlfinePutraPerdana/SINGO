@extends('layouts.menubar')

@section('open','menu-open')

@section('permintaan','active')

@section('rencana-kerja','active')


@section('content')

 {{-- <tambah-rencana></tambah-rencana> --}}

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rencana Kerja Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/rkt">Rencana Kerja Tahunan</a></li>
              <li class="breadcrumb-item active">Tambah Rencana</li>
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
                <h3 class="card-title">Form Rencana Kerja Tahunan</h3>
              </div>
              <form action="/rkt" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                      <label for="">Judul Rencana</label>
                      <input type="text" name="judul" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Rencana Induk Kegiatan</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="">Pendahuluan</label>
                      <textarea id="pendahuluan"  name="pendahuluan" class="form-control" style="height: 300px">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="tujuan">Tujuan</label>
                      {{-- <input type="text" name="tujuan" class="form-control" id="tujuan" placeholder="tujuan"> --}}
                      <textarea name="tujuan" class="form-control" id="tujuan" placeholder="tujuan">

                    </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Sasaran</label>
                      <textarea id="sasaran" name="kelompok_sasaran" class="form-control" style="height: 300px">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Hasil Yang diharapkan</label>
                      <textarea id="diharapkan" name="hasil_yang_diharapkan" class="form-control" style="height: 300px">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Mitra Lokal </label>
                      <select name="" id="" class="form-control">
                        <option value="">options 1</option>
                        <option value="">options 2</option>
                        <option value="">options 3</option>
                        <option value="">options 4</option>
                      </select>
                  </div>
                <div class="form-group">
                    <label for="">Tenaga Kerja / Tenaga Ahli </label>
                    {{-- <input type="text" class="form-control" id="asing" placeholder="Tenaga Asing"> --}}
                    <textarea id="tenaga" name="tenaga_lokal" class="form-control" style="height: 100px">

                    </textarea>
                </div>
                <div class="fom-group mb-3">
                    <label for="">Jumlah Tenaga</label>
                    <input type="number" name="jumlah_ta" class="form-control" placeholder="Jumlah Tenaga" id="tenaga-asing">
                </div>
                  <div class="form-group">
                      <label for="">Peran Serta Pihak Ketiga</label>
                      <textarea id="pihak" name="peran_ketiga" class="form-control" style="height: 300px">

                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Lokasi Pelaksanaan dan Penerima Manfaat</label>
                      <textarea id="lokasi" name="lokasi" class="form-control" style="height: 300px">
                      
                      </textarea>
                  </div>
                  <div class="form-row mb-3">
                    <div class="col-md-6">
                      <label>Mata Uang</label>
                    <select class="form-control" name="mata_uang_id">
                      <option selected>Pilih Mata Uang</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                      <label for="">Besar Nominal</label>
                      <input type="number" name="nominal_biaya" class="form-control" id="nominal" placeholder="Masukan Besaran">
                    </div>
                  </div>
                  {{-- <div class="form-group mt-3">
                      <label for="">Rincian Dana</label>
                      <textarea id="dana" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div> --}}
                  <div class="form-group">
                    <label for="">Jadwal Pelaksanaan</label>
                    <div class="input-group">
                      <input type="text" name="jadwal_awal" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                      <div class="input-group-append">
                        <span class="input-group-text">s/d</span>
                      </div>
                      <input type="text" name="jadwal_akhir" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Penutup</label>
                    <textarea id="penutup" name="penutup" class="form-control" style="height: 300px">

                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="file">Lampiran File</label>
                      <div class="custom-file">
                        <input type="file" name="lampiran" class="custom-file-input" id="file">
                        <label class="custom-file-label" for="file">Pilih File</label>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="file">Unggah BAP</label>
                      <div class="custom-file">
                        <input type="file" name="bap" class="custom-file-input" id="bap">
                        <label class="custom-file-label" for="bap">Pilih File</label>
                      </div>
                  </div>
                </div>

                  <div class="card-footer">
                    <button class="btn btn-primary" type="submit"><i class="far fa-save"></i> <b>Simpan</b></button>
                  </div>  
              </form>
            </div>
          </div>
        </div>
    </section>  
</div>



@endsection









