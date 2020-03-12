@extends('layouts.menubar')

@section('menu-tenaga','menu-open')

@section('rekomendasi','active')

@section('list-tenaga','active')

@section('content')

    {{-- <lihat-tenaga></lihat-tenaga> --}}
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
                  <li class="breadcrumb-item"><a href="/list-tenaga">Rekomendasi Tenaga Asing</a></li>
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
                             <form action="/list-tenaga/{{$tenaga -> id}}/update" method="post" enctype="multipart/form-data" data-parsley-validate>
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                         <input type="text" name="nama" value="{{$tenaga -> nama }}" class="form-control" id="nama" placeholder="Nama" data-parsley-required data-parsley-trigger="keyup">
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" value="{{$tenaga -> jenis_kelamin }}" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin" data-parsley-required data-parsley-trigger="keyup"> --}}
                                        <label class="mb-3">Jenis Kelamin</label></br>
                                    <div class="icheck-primary  d-inline mr-5 mt-3">
                                        <input type="radio"  id="radio1" name="jenis_kelamin"  @if ($tenaga->jenis_kelamin == 'Pria') checked @endif value="Pria">
                                        <label for="radio1">Pria</label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio"  id="radio2" name="jenis_kelamin" @if ($tenaga->jenis_kelamin == 'Wanita') checked @endif value="Wanita">
                                        <label for="radio2">Wanita</label>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" value="{{$tenaga -> tempat_lahir }}" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" data-parsley-required data-parsley-trigger="keyup">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <input type="text" name="tanggal_lahir" value="{{$tenaga -> tanggal_lahir }}" class="form-control datepicker" data-toggle="datetimepicker" data-target=".datepicker" data-parsley-required data-parsley-type="date" data-parsley-trigger="keyup"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="negara">Asal Negara</label>
                                        <input type="text" name="kewarganegaraan" value="{{$tenaga -> kewarganegaraan }}" class="form-control" id="negara" placeholder="Negara" data-parsley-required data-parsley-trigger="keyup">
                                    </div>
                                    <div class="form-group">
                                        <label for="Passport">Nomor Passport</label>
                                        <input type="text" name="no_passport" value="{{$tenaga -> no_passport }}" class="form-control" id="passport" placeholder="Nomor Passport" data-parsley-required data-parsley-trigger="keyup">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Masa Berlaku Passport</label>
                                        <div class="input-group">
                                            <input type="text" name="tgl_berlaku_awal" value="{{$tenaga -> tgl_berlaku_awal }}" class="form-control startdate2 " data-toggle="datetimepicker" data-target=".startdate2"/>
                                            <div class="input-group-append">
                                            <span class="input-group-text">s/d</span>
                                            </div>
                                            <input type="text" name="tgl_berlaku_akhir" value="{{$tenaga -> tgl_berlaku_akhir }}" class="form-control enddate2 " data-toggle="datetimepicker" data-target=".enddate2" data-parsley-required data-parsley-type="date" data-parsley-trigger="keyup"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mitra</label>
                                        <select name="id_instansi" class="form-control" data-parsley-required data-parsley-trigger="keyup">
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
                                        <select name="kategori" class="form-control" data-parsley-required data-parsley-trigger="keyup">
                                          <option value="Tenaga" @if ($tenaga->kategori == 'Tenaga') selected @endif>Tenaga</option>
                                          <option value="Tamu" @if ($tenaga->kategori == 'Tamu') selected @endif>Tamu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kegiatan">Kegiatan</label>
                                        <textarea name="kegiatan"  id="kegiatan" class="form-control" style="height: 300px" placeholder="Masukan Teks" data-parsley-required data-parsley-trigger="keyup">
                                         {!! $tenaga->kegiatan !!}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tujuan Kegiatan</label>
                                        <textarea name="tujuan"  id="tujuan" class="form-control" style="height: 300px" placeholder="Masukan Teks" data-parsley-required data-parsley-trigger="keyup">
                                               {!! $tenaga->tujuan !!}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" name="jabatan" value="{{$tenaga -> jabatan }}" class="form-control" id="jabatan" placeholder="Jabatan" data-parsley-required data-parsley-trigger="keyup"> 
                                    </div>
                                    <div class="form-group">
                                      <label for="">Lama Kegiatan</label>
                                      <div class="input-group">
                                          <input type="text" name="tgl_awal" value="{{$tenaga -> tgl_awal}}" class="form-control startdate " data-toggle="datetimepicker" data-target=".startdate"/>
                                          <div class="input-group-append">
                                             <span class="input-group-text">s/d</span>
                                          </div>
                                           <input type="text" name="tgl_akhir" value="{{$tenaga -> tgl_akhir}}" class="form-control enddate " data-toggle="datetimepicker" data-target=".enddate" data-parsley-required data-parsley-type="date" data-parsley-trigger="keyup" />
                                      </div>
                                  </div> 
                                    <div class="form-group">
                                        <label for="foto">Lampirkan Foto</label>
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="foto" >{{$tenaga -> foto }}</label>
                                            <input type="file" name="foto" value="{{$tenaga -> foto }}" class="custom-file-input" id="foto" aria-describedby="foto">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lampirpassport">Lampirkan Passport</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="lampirpassport">{{$tenaga -> upload_passpor }}</label>
                                                <input type="file" name="upload_passpor" value="{{$tenaga -> upload_passpor }}" class="custom-file-input" id="lampirpassport">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Lampirkan CV</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="cv_resume" value="{{$tenaga -> cv_resume }}" class="custom-file-input" id="cv">
                                                <label class="custom-file-label" for="file">{{$tenaga -> cv_resume }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Lampirkan Jobdesk</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="jobdesc" value="{{$tenaga -> jobdesc }}" class="custom-file-input" id="jobdesk">
                                                <label class="custom-file-label" for="file">{{$tenaga -> jobdesc }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">File Pendukung</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="dokumen_pendukung" value="{{$tenaga -> dokumen_pendukung }}" class="custom-file-input" id="">
                                                <label class="custom-file-label" for="file">{{$tenaga -> dokumen_pendukung }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex flex-row">
                                            <label for="masa">Unggah Perpanjang Masa </label><p class="text-danger pl-2">*keterangan</p>
                                         </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" id="masa" name="file_perpanjangan" value="{{$tenaga -> file_perpanjangan }}" class="custom-file-input">
                                                <label class="custom-file-label" for="file">{{$tenaga -> file_perpanjangan }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_keaktifan">Status</label>
                                        <select name="status_keaktifan" class="form-control" disabled>
                                          <option value="Non-Aktif" @if ($tenaga->status_keaktifan == "Non-Aktif") selected @endif>Non-Aktif</option>
                                          <option value="Aktif" @if ($tenaga->status_keaktifan == "Aktif") selected @endif>Aktif</option>
                                        </select>
                                    </div>
                                    
                                        
                                    <div class="card-footer">
                                        <a class="btn btn-warning" href="{{ url()->previous() }}" role="button"><i class="fas fa-chevron-left"></i> <b> Kembali</b></a>
                                        <button class="btn btn-primary" type="submit"><i class="far fa-paper-plane"></i> <b>Kirim</b></button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection

<script>



</script>