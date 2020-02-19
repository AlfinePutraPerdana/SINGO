@extends('layouts.menufasker')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekomendasi Tenaga Asing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Rekomendasi Tenaga Asing</a></li>
              <li class="breadcrumb-item active">Verifikasi Rekomendasi</li>
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
                        <h3 class="card-title">Form Rekomendasi Tenaga Kerja</h3>
                    </div>
                    <div class="card-body">
                         <form action="/verif-tenaga-asing/{{$tenaga -> id }}/verifikasi" method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                     <input type="text" name="nama" value="{{$tenaga -> nama }}" class="form-control" id="nama" placeholder="nama" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" value="{{$tenaga -> jenis_kelamin }}" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="{{$tenaga -> tempat_lahir }}" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <input type="text" name="tanggal_lahir" value="{{$tenaga -> tanggal_lahir }}" class="form-control datepicker" data-toggle="datetimepicker" data-target=".datepicker" disabled/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="negara">Asal Negara</label>
                                    <input type="text" name="kewarganegaraan" value="{{$tenaga -> kewarganegaraan }}" class="form-control" id="negara" placeholder="negara" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="Passport">Nomor Passport</label>
                                    <input type="text" name="no_passport" value="{{$tenaga -> no_passport }}" class="form-control" id="passport" placeholder="Nomor Passport" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Masa Berlaku Passport</label>
                                    <div class="input-group">
                                        <input type="text" name="tgl_berlaku_awal" value="{{$tenaga -> tgl_berlaku_awal }}" class="form-control startdate2 " data-toggle="datetimepicker" data-target=".startdate2" disabled/>
                                        <div class="input-group-append">
                                        <span class="input-group-text">s/d</span>
                                        </div>
                                        <input type="text" name="tgl_berlaku_akhir" value="{{$tenaga -> tgl_berlaku_akhir }}" class="form-control enddate2 " data-toggle="datetimepicker" data-target=".enddate2" disabled/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mitra</label>
                                    <select name="id_instansi" class="form-control" disabled>
                                        @foreach ($instansis as $instansi)
                                             <option 
                                                 value="{{$instansi -> id}}"
                                                    @if ($instansi -> id === $tenaga-> id_instansi)
                                                        selected
                                                    @endif
                                                    > {{ $instansi -> nama}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori" class="form-control" disabled>
                                      <option value="Tenaga" @if ($tenaga->kategori == 'Tenaga') selected @endif>Tenaga</option>
                                      <option value="Tamu" @if ($tenaga->kategori == 'Tamu') selected @endif>Tamu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kegiatan">Kegiatan</label>
                                    <textarea name="kegiatan"  id="kegiatan" class="form-control" style="height: 300px" readonly>
                                     {!! $tenaga->kegiatan !!}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Tujuan Kegiatan</label>
                                    <textarea name="tujuan2"  id="tujuan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                           {!! $tenaga->tujuan !!}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" value="{{$tenaga -> jabatan }}" class="form-control" id="jabatan" placeholder="Jabatan" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Lama Kegiatan</label>
                                    <div class="input-group">
                                        <input type="text" name="tgl_awal" value="{{$tenaga -> tgl_awal}}" id="tgl_awal" class="form-control startdate " data-toggle="datetimepicker" data-target=".startdate" disabled/>
                                        <div class="input-group-append">
                                           <span class="input-group-text">s/d</span>
                                        </div>
                                         <input type="text" name="tgl_akhir" value="{{$tenaga -> tgl_akhir}}" class="form-control enddate " data-toggle="datetimepicker" data-target=".enddate" disabled/>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="foto">Lampiran Foto</label></br>
                                    <p for="foto">Silahkan Unduh File  : <a class="btn btn-info btn-sm" role="button" href="{{url('foto/'.$tenaga->foto)}}" target="_blank"><i class="fas fa-file-download"></i> <b>Download</b></a> </p>
                                    {{-- <div class="custom-file">
                                        <label class="custom-file-label" for="foto" >Pilih File</label>
                                        <input type="file" name="foto" value="{{$tenaga -> foto }}" class="custom-file-input" id="foto" aria-describedby="foto">
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="lampirpassport">Lampiran Passport</label>
                                    <p for="foto">Silahkan Unduh File  : <a class="btn btn-info btn-sm" role="button" href="{{url('passport/'.$tenaga->upload_passpor)}}" target="_blank"><i class="fas fa-file-download"></i> <b>Download</b></a></p>
                                    
                                    {{-- <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="lampirpassport">Pilih File</label>
                                            <input type="file" name="upload_passpor" value="{{$tenaga -> upload_passpor }}" class="custom-file-input" id="lampirpassport">
                                        </div>
                                    </div> --}}
                                    
                                </div>
                                <div class="form-group">
                                    <label for="file">Lampiran CV</label>
                                    <p for="foto">Silahkan Unduh File  : <a class="btn btn-info btn-sm" role="button" href="{{url('cv/'.$tenaga->cv_resume)}}" target="_blank"><i class="fas fa-file-download"></i> <b>Download</b></a> </p>
                                    {{-- <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="cv_resume" value="{{$tenaga -> cv_resume }}" class="custom-file-input" id="cv">
                                            <label class="custom-file-label" for="file">Pilih File</label>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="file">Lampiran Jobdesk</label>
                                    <p for="foto">Silahkan Unduh File  : <a class="btn btn-info btn-sm" role="button" href="{{url('jobdesc/'.$tenaga->jobdesc)}}" target="_blank"><i class="fas fa-file-download"></i> <b>Download</b></a> </p>
                                    {{-- <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="jobdesc" value="{{$tenaga -> jobdesc }}" class="custom-file-input" id="jobdesk">
                                            <label class="custom-file-label" for="file">Pilih File</label>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="file">File Pendukung</label>
                                    <p for="foto">Silahkan Unduh File   : <a class="btn btn-info btn-sm" role="button" href="{{url('dokumen pendukung/'.$tenaga->dokumen_pendukung)}}" target="_blank"><i class="fas fa-file-download"></i> <b>Download</b></a> </p>
                                    {{-- <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="dokumen_pendukung" value="{{$tenaga -> dokumen_pendukung }}" class="custom-file-input" id="">
                                            <label class="custom-file-label" for="file">Pilih File</label>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="">Catatan</label>
                                    <textarea id="catatan" name="catatan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                            {!! $tenaga->catatan !!}
                                    </textarea>
                                </div>  
                                    
                                <div class="card-footer">
                                  <div class="d-flex justify-content-between">
                                    <button class="btn btn-danger" name="revisi[]" type="submit"><i class="fas fa-sync-alt"></i> <b>Revisi</b></button>
                                    <button class="btn btn-success" name="setuju[]" type="submit"><i class="far fa-check-circle"></i> <b>Setuju</b></button>
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
        $('#tujuan').summernote('disable')
        $('#kegiatan').summernote('disable')
    </script>
@endpush