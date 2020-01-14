@extends('mitra.ngo.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Draft Rencana Kerja Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rencana Kerja Tahunan</li>
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
              <form role="form">
                <div class="card-body">
                  
                <div class="form-group">
                    <label for="">Pendahuluan</label>
                    <textarea id="pendahuluan" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                      
                    </textarea>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label>Sasaran</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" placeholder="tujuan">
                  </div>
                  <div class="form-group">
                    <label for="hasil">Hasil Yang Diharapkan</label>
                    <input type="text" class="form-control" id="hasil" placeholder="hasil yang diharapkan">
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Tenaga Kerja</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="peran_serta">Peran Serta Pihak Ketiga</label>
                    <input type="text" class="form-control" id="peran" placeholder="Peran Serta Pihak Ketiga">
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Lokasi  Pelaksanaan</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Pembiayaan</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Jadwal Pelaksanaan</label>
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
                    <label for="">Penutup</label>
                    <textarea id="penutup" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                      
                    </textarea>
                </div>
                  <div class="form-group">
                    <label for="file">Lampiran File</label>
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
                  <div class="form-group">
                    <label for="file">Unggah BAP</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bap">
                        <label class="custom-file-label" for="bap">Pilih File</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="upload">Unggah</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a class="btn btn-primary" href="/rkt" role="button">Simpan</a>
                </div>
              </form>
            </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
        </div>
    </section>
   

@endsection
 

      


  



