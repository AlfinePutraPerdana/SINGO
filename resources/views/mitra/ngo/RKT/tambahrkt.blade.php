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
              <form action="/rkt" method="post" enctype="multipart/form-data" data-parsley-validate>
                {{ csrf_field() }}
                <div class="card-body">
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
                      <label for="">Judul Rencana</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul Rencana" value="{{ old('judul') }}" data-parsley-required data-parsley-trigger="keyup">
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
                      <textarea id="pendahuluan"  name="pendahuluan" class="form-control" style="height: 300px" data-parsley-required data-parsley-trigger="keyup">
                        {!! old('pendahuluan') !!}
                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="tujuan">Tujuan</label>
                      <textarea name="tujuan" class="form-control" id="tujuan" placeholder="tujuan" data-parsley-required data-parsley-trigger="keyup">
                        {!! old('tujuan') !!}
                    </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Sasaran</label>
                      <textarea id="sasaran" name="kelompok_sasaran" class="form-control" style="height: 300px" data-parsley-required data-parsley-trigger="keyup">
                          {!! old('kelompok_sasaran') !!}
                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Hasil Yang diharapkan</label>
                      <textarea id="diharapkan" name="hasil_yang_diharapkan" class="form-control" style="height: 300px" data-parsley-required data-parsley-trigger="keyup">
                            {!! old('hasil_yang_diharapkan') !!}
                      </textarea>
                  </div>
                  {{-- <div class="form-group">
                      <label for="">Mitra Lokal </label>
                      <select name="" id="" class="form-control">
                        <option value="">options 1</option>
                        <option value="">options 2</option>
                        <option value="">options 3</option>
                        <option value="">options 4</option>
                      </select>
                  </div> --}}
                <div class="form-group">
                    <label for="">Tenaga Ahli Lokal</label>
                    {{-- <input type="text" class="form-control" id="asing" placeholder="Tenaga Asing"> --}}
                    <textarea id="tenaga" name="tenaga_lokal" class="form-control" style="height: 100px" data-parsley-required data-parsley-trigger="keyup">
                        {!! old('tenaga_lokal') !!}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Tenaga Ahli Asing</label>
                    {{-- <input type="text" class="form-control" id="asing" placeholder="Tenaga Asing"> --}}
                    <textarea id="tenaga-asing" name="tenaga_asing" class="form-control" style="height: 100px" data-parsley-required data-parsley-trigger="keyup">
                        {!! old('tenaga_asing') !!}
                    </textarea>
                </div>
                <div class="fom-group mb-3">
                    <label for="">Jumlah Tenaga</label>
                    <input type="number" name="jumlah_ta" class="form-control" value="{{ old('jumlah_ta') }}" placeholder="Jumlah Tenaga" id="tenaga-asing" data-parsley-required data-parsley-trigger="keyup">
                </div>
                  <div class="form-group">
                      <label for="">Peran Serta Pihak Ketiga</label>
                      <textarea id="pihak" name="peran_ketiga" class="form-control" style="height: 300px" data-parsley-required data-parsley-trigger="keyup">
                          {!! old('peran_ketiga') !!}
                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Lokasi Pelaksanaan dan Penerima Manfaat</label>
                      <textarea id="lokasi" name="lokasi" class="form-control" style="height: 300px" data-parsley-required data-parsley-trigger="keyup">
                            {!! old('lokasi') !!}
                      </textarea>
                  </div>
                  {{-- <div class="form-group">
                                    <label for="mitra">Mitra</label>
                                    <select name="id_instansi" class="form-control" id="mitra"  data-parsley-required data-parsley-trigger="keyup">
                                        <option value="">Pilih Mitra</option>
                                        @foreach ($instansis as $instansi)
                                             <option value="{{$instansi -> id}}" {{(old('id_instansi') == $instansi -> id) ? 'selected' : ''}}> {{ $instansi -> nama}} </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                  <div class="form-row mb-3">
                    <div class="col-md-6">
                      <label>Mata Uang</label>
                    <select class="form-control" name="mata_uang_id" data-parsley-required data-parsley-trigger="keyup">
                      <option value="">Pilih Mata Uang</option>
                      @foreach ($uangs as $uang)
                      <option value="{{$uang -> id}}" {{(old('mata_uang_id') == $uang -> id) ? 'selected' : ''}}> {{ $uang -> name}} </option>
                        @endforeach

                    </select>
                    </div>
                    <div class="col-md-6">
                      <label for="">Besar Nominal</label>
                      <input type="number" name="nominal_biaya" class="form-control" value="{{ old('nominal_biaya') }}" id="nominal" placeholder="Masukan Besaran" data-parsley-required data-parsley-trigger="keyup">
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
                      <input type="text" name="jadwal_awal" class="form-control startdate" value="{{ old('jadwal_awal') }}" placeholder="yyyy/mm/dd" data-toggle="datetimepicker" data-target=".startdate"/>
                      <div class="input-group-append">
                        <span class="input-group-text">s/d</span>
                      </div>
                      <input type="text" name="jadwal_akhir" class="form-control enddate" value="{{ old('jadwal_akhir') }}" placeholder="yyyy/mm/dd" data-toggle="datetimepicker" data-target=".enddate" data-parsley-required data-parsley-type="date" data-parsley-trigger="keyup" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Penutup</label>
                    <textarea id="penutup" name="penutup" class="form-control" style="height: 300px" data-parsley-required data-parsley-trigger="keyup">
                        {!! old('penutup') !!}
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="file">Lampiran File</label>
                      <div class="custom-file">
                        <input type="file" name="lampiran" class="custom-file-input" id="file" data-parsley-required data-parsley-trigger="keyup">
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









