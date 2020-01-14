@extends('mitra.ngo.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item active">Ajukan Tamu Asing</li>
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
                <h3 class="card-title">Form Pemberitahuan Tamu</h3>
              </div>
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="nama">
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
                    <label for="berlaku">Masa Berlaku Passport</label>
                    <input type="text" class="form-control" id="berlaku" placeholder="Masa Berlaku">
                  </div>
                  <div class="form-group">
                    <label for="NGO">NGO</label>
                    <input type="text" class="form-control" id="ngo" placeholder="NGO">
                  </div>
                  <div class="form-group">
                    <label for="tujuan">Tujuan Kegiatan</label>
                    <input type="text" class="form-control" id="tujuan" placeholder="Tujuan Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="daerah">Tujuan Daerah</label>
                    <input type="text" class="form-control" id="daerah" placeholder="daerah">
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Lama Kegiatan</label>
                      <div class="input-group">
                        <input type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                        <div class="input-group-append">
                          <span class="input-group-text">s/d</span>
                        </div>
                        <input type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="file">Jadwal Kegiatan</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file">
                        <label class="custom-file-label" for="file">Pilih File</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="upload">Unggah</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a class="btn btn-primary" href="/tamu" role="button">Simpan</a>
                </div>
              </form>
            </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>

      <!-- Default box -->
      <!-- /.row -->
      
  <!-- /.content-wrapper -->
@endsection
  


