@extends('layouts.menubar')


@section('content')

{{-- <rencana-induk></rencana-induk> --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rencana Induk Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="">Rencana Induk Kegiatan</a></li>
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
                <h3 class="card-title">Form Rencana Induk Kegiatan</h3>
              </div>
              <form role="form" action="/draft-rik/{{$program->id}}/tambah-kegiatan" method="post">
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
                      <label for="">Nama Kegiatan</label>
                      <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                      <label for="">Detil Kegiatan</label>
                      <textarea id="detail_kegiatan" name="detail_kegiatan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Penerima Manfaat</label>
                      <textarea id="penerima_manfaat" name="penerima_manfaat" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Indikator outcome</label>
                      <textarea id="indikator_outcome" name="indikator_outcome" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Lokasi</label>
                    <input id="lokasi_kerja" name="lokasi_kerja" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Waktu</label>
                    <div class="input-group">
                      <input id="tahun_awal" name="tahun_awal" type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                      <div class="input-group-append">
                        <span class="input-group-text">s/d</span>
                      </div>
                      <input id="tahun_akhir" name="tahun_akhir" type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="">Mitra Koordinasi Kemendagri</label>
                      <input id="mitra_kemendagri" name="mitra_kemendagri" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Mitra Koordinasi Lapangan</label>
                      <input id="mitra_lapangan" name="mitra_lapangan" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Mitra Kerja</label>
                      <input id="mitra_kerja" name="mitra_kerja" type="text" class="form-control">
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Besar Nominal Asing</label>
                        <input type="number" class="form-control" id="nominal_asing" name="nominal_asing" placeholder="Masukan Besaran">
                    </div>

                    <div class="col-md-6">
                      <label>Mata Uang</label>
                    <select class="form-control" name="mata_uang">
                      <option value="">Pilih Mata Uang</option>
                      @foreach ($uangs as $currency)
                      <option value="{{$currency ->id}}" {{(old('mata_uang_id') == $currency -> id) ? 'selected' : ''}}> {{ $currency -> name}} </option>
                        @endforeach
                    </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Besar Nominal Rupiah</label>
                        <input type="number" class="form-control" id="nominal_lokal" name="nominal_lokal" placeholder="Masukan Besaran">
                    </div>
                  </div>
                  <div class="form-group mt-3">
                      <label for="">Sumber Dana</label>
                      <input id="sumber_dana" name="sumber_dana" type="text" class="form-control">
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
