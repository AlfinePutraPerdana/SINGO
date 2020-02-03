<template>
      
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pemberitahuan Tamu Asing</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/satker/tamu">Pemberitahuan Tamu Asing</a></li>
            <li class="breadcrumb-item active">Tambah Tamu Asing</li>
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
            <h3 class="card-title">Form Pemberitahuan Tamu Asing</h3>
          </div>
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
                  <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" class="form-control" id="nama" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <div class="input-group">
                      <input type="text" class="form-control datepicker datetimepicker-input" data-toggle="datetimepicker" data-target=".datepicker" />
                    </div>
                  </div>
                <div class="form-group">
                  <label for="negara">Asal Negara</label>
                  <input type="text" class="form-control" id="negara" placeholder="negara">
                </div>
                <div class="form-group">
                  <label for="Passport">Nomor Passport</label>
                  <input type="text" class="form-control" id="passport" placeholder="Nomor Passport">
                </div>
                <div class="form-group">
                    <label for="">Masa Berlaku Passport</label>
                    <div class="input-group">
                      <input type="text" class="form-control startdate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate2"/>
                      <div class="input-group-append">
                        <span class="input-group-text">s/d</span>
                      </div>
                      <input type="text" class="form-control enddate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate2" />
                    </div>
                </div>
                <div class="form-group">
                  <label>Instansi</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tujuan Kunjungan</label>
                  <textarea id="tujuan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                  
                  </textarea>
                </div>
                <div class="form-row mb-3">
                  <div class="col-md-6">
                    <label for="">Provinsi</label>
                    <select name="" id="" class="custom-select" multiple>
                      <option value="">Provinsi 1</option>
                      <option value=""> Provinsi 2</option>
                      <option value="">Provinsi 3</option>
                      <option value="">Provinsi 4</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Kabupaten</label>
                    <select name="" id="" class="custom-select" multiple>
                      <option value="">Kabupaten 1</option>
                      <option value="">Kabupaten 2</option>
                      <option value="">Kabupaten 3</option>
                      <option value="">Kabupaten 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Detail Lokasi Kunjungan</label>
                  <textarea id="daerah" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                  
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="">Jadwal Kegiatan</label>
                  <div class="input-group">
                    <input type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                    <div class="input-group-append">
                      <span class="input-group-text">s/d</span>
                    </div>
                    <input type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="file">Jadwal Kegiatan</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="jadwal">
                      <label class="custom-file-label" for="file">Pilih File</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="file">Lampiran File</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="file">
                      <label class="custom-file-label" for="file">Pilih File</label>
                    </div>
                  </div>
                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a class="btn btn-primary" href="/satker/tamu" role="button"><i class="far fa-save"></i> <b>Simpan</b></a>
              </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
