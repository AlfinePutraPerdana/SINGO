@extends('layouts.menubarsatker')

@section('menu-rkt','menu-open')

@section('rencana','active')

@section('master-rkt','active')

@section('content')
    {{-- <lihat-rkt></lihat-rkt> --}}

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
                  <li class="breadcrumb-item"><a href="/satker/draft-rkt">Rencana Kerja Tahunan</a></li>
                  <li class="breadcrumb-item active">Data Rencana</li>
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
                    <h3 class="card-title">Data Rencana Kerja Tahunan</h3>
                  </div>
                  <form role="form">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group">
                              <label for="">Judul Rencana</label>
                              <input type="text" class="form-control" name="judul" value="{{ $rencana->judul }}" readonly>
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
                              <textarea id="pendahuluan" name="pendahuluan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                {!! $rencana->pendahuluan !!}
                              </textarea>
                          </div>
                          <div class="form-group">
                              <label for="tujuan">Tujuan</label>
                              {{-- <input type="text" class="form-control" id="tujuan" placeholder="tujuan"> --}}
                              <textarea id="tujuan" name="tujuan" class="form-control" style="height: 300px" >
                                  {!! $rencana->tujuan !!}
                              </textarea>
                          </div>
                          <div class="form-group">
                              <label for="">Sasaran</label>
                              <textarea id="sasaran" name="kelompok_sasaran" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                {!! $rencana->kelompok_sasaran !!}
                              </textarea>
                          </div>
                          <div class="form-group">
                              <label for="">Hasil Yang diharapkan</label>
                              <textarea id="diharapkan" name="hasil_yang_diharapkan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                  {{ $rencana->hasil_yang_diharapkan }}
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
                            <textarea id="tenaga" name="tenaga_lokal" class="form-control" style="height: 100px" placeholder="Masukan Teks">
                                {!! $rencana->tenaga_lokal !!}
                            </textarea>
                        </div>
                        <div class="fom-group mb-3">
                            <label for="">Jumlah Tenaga</label>
                            <input type="number" name="jumlah_ta" class="form-control" placeholder="Jumlah Tenaga" id="tenaga-asing" value="{{ $rencana->jumlah_ta }}" disabled>
                        </div>
                          <div class="form-group">
                              <label for="">Peran Serta Pihak Ketiga</label>
                              <textarea id="pihak" name="peran_ketiga" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                  {!! $rencana ->peran_ketiga !!}
                              </textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Lokasi Pelaksanaan dan Penerima Manfaat</label>
                              <textarea id="lokasi" name="lokasi" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                {!! $rencana->lokasi !!}
                              </textarea>
                          </div>
                          <div class="form-row mb-3">
                            <div class="col-md-6">
                              <label>Mata Uang</label>
                            <select class="form-control">
                              <option selected>Pilih Mata Uang</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                            </select>
                            </div>
                            <div class="col-md-6">
                              <label for="">Besar Nominal</label>
                              <input type="number" name="nominal_biaya" class="form-control" id="nominal" placeholder="Masukan Besaran" value="{{ $rencana->nominal_biaya }} " disabled>
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
                              <input type="text" name="jadwal_awal" class="form-control startdate" data-toggle="datetimepicker" data-target=".startdate" value="{{ $rencana->jadwal_awal }}" disabled/>
                              <div class="input-group-append">
                                <span class="input-group-text">s/d</span>
                              </div>
                              <input type="text" name="jadwal_akhir" class="form-control enddate" data-toggle="datetimepicker" data-target=".enddate"  value="{{ $rencana->jadwal_akhir }}" disabled/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="">Penutup</label>
                            <textarea id="penutup" name="penutup" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                              {!! $rencana->penutup !!}
                            </textarea>
                          </div>
                          <div class="form-group">
                              <label for="lampiran">Lampiran File</label>
                              <p for="lampiran">Lampiran File  : <a class="btn btn-info btn-sm" role="button" href="{{ url('storage/lampiran RKT/'.$rencana->filename_lampiran) }}" target="_blank"><i class="far fa-eye"></i> <b>Lihat</b></a></p>
                          </div>
                          <div class="form-group">
                            <label for="lampirpassport">Lampiran BAP</label>
                            <p for="lampirpassport">Lampiran File  : <a class="btn btn-info btn-sm" role="button" href="{{ url('storage/lampiran BAP/'.$rencana->filename_bap) }}" target="_blank"><i class="far fa-eye"></i> <b>Lihat</b></a></p>
                          </div>
                      </div>
                    </div> 
                  </form>
                </div>
              </div>
            </div>
        </section>  
    </div>

@endsection

@push('script')

    <script>
        $(document).ready(function(){
            $('#pendahuluan').summernote('disable')
            $('#tujuan').summernote('disable')
            $('#sasaran').summernote('disable')
            $('#diharapkan').summernote('disable')
            $('#tenaga').summernote('disable')
            $('#pihak').summernote('disable')
            $('#lokasi').summernote('disable')
            $('#penutup').summernote('disable')
        });
    </script>
    
@endpush