@extends('layouts.menufasker')
@extends('layouts.menufasker')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tamu Asing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Daftar Tamu Asing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Tamu Asing <span></span></h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Cari">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 450px;">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Negara</th>
                    <th>Aksi</th>
                    <th>Pilih</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Andy Woods</td>
                        <td>Singapura</td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                            <i class="far fa-eye"></i><b> Lihat Form</b>
                        </button></td>
                        <div class="modal fade" id="pratinjau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Tamu Asing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" role="form">
                                        <div class="card-body">
                                            <div class="form-group">
                                              <label for="nama">Nama</label>
                                              <p>Andy Woods</p>
                                            </div>
                                              <div class="form-group">
                                                <label for="nama">Tempat Lahir</label>
                                                <p>Bogor</p>
                                              </div>
                                              <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <div class="input-group">
                                                  <p>1999-01-30</p>
                                                </div>
                                              </div>
                                            <div class="form-group">
                                              <label for="negara">Asal Negara</label>
                                              <p>Bogota</p>
                                            </div>
                                            <div class="form-group">
                                              <label for="Passport">Nomor Passport</label>
                                              <p>99911835XXX</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Masa Berlaku Passport</label>
                                                <div class="input-group">
                                                 <p>12-10-2020 S/d 15-10-2020</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label>Instansi</label>
                                             <p>Ormas Pencinta Otopet Racing (OPOR)</p>
                                            </div>
                                            <div class="form-group">
                                              <label for="">Tujuan Kunjungan</label>
                                              <p>Tujuan Andy datang ke Indonesia adalah untuk memantau perkembangan pedagangotopet kaki lima di ciapus Bogor semoga lancar selalu
                                              </p>
                                            </div>
                                            <div class="form-row mb-3">
                                              <div class="col-md-6">
                                                <label for="">Provinsi</label>
                                                <p>JawaBarat</p>
                                              </div>
                                              <div class="col-md-6">
                                                <label for="">Kabupaten</label>
                                                <p>Bogor</p>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="">Detail Lokasi Kunjungan</label>
                                              <p>Jl.gaspol,Kampung kotadesa, kecamatan ciomas</p>
                                            </div>
                                            <div class="form-group">
                                              <label for="">Jadwal Kegiatan</label>
                                              <p>12-12-2020 s/d 11-12-2021</p>
                                            </div>
                                            <div class="form-group">
                                              <label for="file">Jadwal Kegiatan</label>
                                              <p>Jadwal_kerjaku.PDF</p><button><i class="fas fa-file-download"></i>  Unduh</button>
                                            </div>
                                            <div class="form-group">
                                              <label for="file">Lampiran File</label>
                                              <p>Lampiran.PDF</p><button><i class="fas fa-file-download"></i>  Unduh</button>
                                            </div>
                                            <div class="form-group">
                                            <label>Keterangan Koreksi :</label>
                                            <br />
                                            <textarea placeholder="Tuliskan Hal Yang Perlu Dikoreksi" style="width:100%; resize: none;">

                                            </textarea>
                                          <!-- /.card-body -->
                                          <div class="card-footer">

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal"data-toggle="tooltip" title="Ajukan Perbaikan Data"><i class="fas fa-ban"></i>  Revisi</button>
                                          <button type="submit" class="btn btn-success"  data-toggle="tooltip" title="Verifikasi Tamu"><i class="far fa-check-square"></i>  Verifikasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                        </td>
                      </tr>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Andy Woods</td>
                        <td>Singapura</td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                            <i class="far fa-eye"></i><b> Lihat Form</b>
                        </button></td>
                        <div class="modal fade" id="pratinjau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Tamu Asing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" role="form">
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
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                          <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                        </td>
                      </tr>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Andy Woods</td>
                        <td>Singapura</td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                            <i class="far fa-eye"></i><b> Lihat Form</b>
                        </button></td>
                        <div class="modal fade" id="pratinjau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Tamu Asing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" role="form">
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
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                          <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                        </td>
                      </tr>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>Andy Woods</td>
                        <td>Singapura</td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                            <i class="far fa-eye"></i><b> Lihat Form</b>
                        </button></td>
                        <div class="modal fade" id="pratinjau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Tamu Asing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" role="form">
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
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                          <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                        </td>
                      </tr>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Andy Woods</td>
                        <td>Singapura</td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                            <i class="far fa-eye"></i><b> Lihat Form</b>
                        </button></td>
                        <div class="modal fade" id="pratinjau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Tamu Asing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" role="form">
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
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                          <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>
                        </td>
                      </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
        </div>
          <!-- /.card -->
        </div>
      </div>
  <!-- /.content-wrapper -->
@endsection
