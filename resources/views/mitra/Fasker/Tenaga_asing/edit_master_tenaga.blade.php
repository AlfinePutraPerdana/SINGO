@extends('layouts.menufasker')

@section('menu-tenaga','menu-open')

@section('rekomendasi','active')

@section('data-tenaga','active')

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
              <li class="breadcrumb-item"><a href="/tenaga">Rekomendasi Tenaga Asing</a></li>
              <li class="breadcrumb-item active">Ubah Rekomendasi</li>
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
                         <form action="/master-tenaga-asing/{{$tenaga->id}}/update" method="post" enctype="multipart/form-data" >
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
                                    {{-- <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="{{$tenaga -> tempat_lahir }}" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" readonly> --}}
                                    <label class="mb-3">Jenis Kelamin</label></br>
                                    <div class="icheck-primary  d-inline mr-5 mt-3">
                                        <input type="radio"  id="radio1" name="jenis_kelamin"  @if ($tenaga->jenis_kelamin == 'Pria') checked @endif disabled>
                                        <label for="radio1">Pria</label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio"  id="radio2" name="jenis_kelamin" @if ($tenaga->jenis_kelamin == 'Wanita') checked @endif disabled>
                                        <label for="radio2">Wanita</label>
                                    </div>
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
                                    <textarea name="kegiatan"  id="kegiatan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                     {!! $tenaga->kegiatan !!}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Tujuan Kegiatan</label>
                                    <textarea name="tujuan"  id="tujuan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
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
                                      <input type="text" name="tgl_awal" value="{{$tenaga -> tgl_awal}}" class="form-control startdate " data-toggle="datetimepicker" data-target=".startdate" disabled/>
                                      <div class="input-group-append">
                                         <span class="input-group-text">s/d</span>
                                      </div>
                                       <input type="text" name="tgl_akhir" value="{{$tenaga -> tgl_akhir}}" class="form-control enddate " data-toggle="datetimepicker" data-target=".enddate" disabled />
                                  </div>
                              </div> 
                                <div class="form-group">
                                    <label for="foto">Lampirkan Foto</label>
                                    <div class="custom-file">
                                        <input type="file" name="foto" value="{{$tenaga -> foto }}" class="custom-file-input" id="foto" aria-describedby="foto" disabled>
                                        <label class="custom-file-label" for="foto" >{{$tenaga -> foto }}</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lampirpassport">Lampirkan Passport</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="upload_passpor" value="{{$tenaga -> upload_passpor }}" class="custom-file-input" id="lampirpassport" disabled>
                                            <label class="custom-file-label" for="lampirpassport">{{$tenaga -> upload_passpor }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file">Lampirkan CV</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="cv_resume" value="{{$tenaga -> cv_resume }}" class="custom-file-input" id="cv" disabled>
                                            <label class="custom-file-label" for="file">{{$tenaga -> cv_resume }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file">Lampirkan Jobdesk</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="jobdesc" value="{{$tenaga -> jobdesc }}" class="custom-file-input" id="jobdesk" disabled>
                                            <label class="custom-file-label" for="file">{{$tenaga -> jobdesc }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file">File Pendukung</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="dokumen_pendukung" value="{{$tenaga -> dokumen_pendukung }}" class="custom-file-input" disabled>
                                            <label class="custom-file-label" for="file">{{$tenaga -> dokumen_pendukung }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status_keaktifan">Status</label>
                                    <select name="status_keaktifan" class="form-control">
                                      <option value="Non-Aktif" @if ($tenaga->status_keaktifan == "Non-Aktif") selected @endif>Non-Aktif</option>
                                      <option value="Aktif" @if ($tenaga->status_keaktifan == "Aktif") selected @endif>Aktif</option>
                                    </select>
                                </div>
                                    
                                <div class="card-footer">
                                    <a class="btn btn-warning" href="{{ url()->previous() }}" role="button"><i class="fas fa-chevron-left"></i> <b> Kembali</b></a>
                                    <button class="btn btn-primary" type="submit"><i class="far fa-save"></i> <b>Simpan</b></button>
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