@extends('layouts.menubar')

@section('content')

 {{-- <ajukan-tenaga></ajukan-tenaga> --}}

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
              <li class="breadcrumb-item active">Tambah Rekomendasi</li>
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
                        <form action="/tenaga" method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <input type="text" name="tanggal_lahir" class="form-control datepicker datetimepicker-input" data-toggle="datetimepicker" data-target=".datepicker" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="negara">Asal Negara</label>
                                    <input type="text" name="kewarganegaraan" class="form-control" id="negara" placeholder="negara">
                                </div>
                                <div class="form-group">
                                    <label for="Passport">Nomor Passport</label>
                                    <input type="text" name="no_passport" class="form-control" id="passport" placeholder="Nomor Passport">
                                </div>
                                <div class="form-group">
                                    <label for="">Masa Berlaku Passport</label>
                                    <div class="input-group">
                                        <input type="text" name="tgl_berlaku_awal" class="form-control startdate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate2"/>
                                        <div class="input-group-append">
                                        <span class="input-group-text">s/d</span>
                                        </div>
                                        <input type="text" name="tgl_berlaku_akhir" class="form-control enddate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate2" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mitra</label>
                                    <select name="id_instansi" class="form-control">
                                        @foreach ($instansis as $instansi)
                                             <option value="{{$instansi -> id}}"> {{ $instansi -> nama}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori" class="form-control">
                                      <option value="Tenaga">Tenaga</option>
                                      <option value="Tamu">Tamu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kegiatan">Kegiatan</label>
                                    <textarea name="kegiatan"  id="kegiatan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                     
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Tujuan Kegiatan</label>
                                    <textarea name="tujuan" id="tujuan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                                    
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
                                </div>
                                <div class="form-group">
                                    <label for="foto">Lampirkan Foto</label>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="foto" >Pilih File</label>
                                        <input type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lampirpassport">Lampirkan Passport</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="lampirpassport">Pilih File</label>
                                            <input type="file" name="upload_passpor" class="custom-file-input" id="lampirpassport">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file">Lampirkan CV</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="cv_resume" class="custom-file-input" id="cv">
                                            <label class="custom-file-label" for="file">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file">Lampirkan Jobdesk</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="jobdesc" class="custom-file-input" id="jobdesk">
                                            <label class="custom-file-label" for="file">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file">File Pendukung</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="dokumen_pendukung" class="custom-file-input" id="">
                                            <label class="custom-file-label" for="file">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Lama Kegiatan</label>
                                    <div class="input-group">
                                        <input type="text" name="tgl_awal" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                                        <div class="input-group-append">
                                        <span class="input-group-text">s/d</span>
                                        </div>
                                        <input type="text" name="tgl_akhir" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                                    </div>
                                </div>
                                   
                                    
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit"><i class="far fa-save"></i> <b>Simpan</b></button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
</div>
 
<script type="application/javascript">
    $('.custom-file-input').on('change', function() {
     let fileName = $(this).val().split('\\').pop();
     $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
 });
 </script>

@endsection



