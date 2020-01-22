<template>
        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengajuan Monev</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengajuan Monev</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Pengajuan Monev <a href="#"  type="button" class="badge badge-primary" data-toggle="modal" data-target="#tambah">
                        Tambah Pengajuan
                  </a></h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Program</th>
                  <th>Propinsi</th>
                  <th>Kabupaten</th>
                  <th>Waktu</th>
                  <th>Status</th>
                  <th colspan="2" class="text-center">Aksi</th>
                  <th>Pilih Pengajuan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Pembangunan</td>
                  <td>
                      Jawa Barat
                  </td>
                  <td>
                      <ul>
                          <li>
                              Kabupaten Bogor
                          </li>
                          <li>
                              Kabupaten Depok
                          </li>
                      </ul>
                  </td>
                  <td>10/01/2020 - 12/02/2020</td>
                  <td><span class="badge badge-pill badge-warning">Dalam Proses</span></td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                      Ubah
                  </button>
                  <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Form Pengajuan Monev</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              <form action="" role="form">
                                  <div class="form-group">
                                      <label for="propinsi">Pillih Program</label>
                                      <select class="form-control" id="program1">
                                      <option>options 1</option>
                                      <option>options 2</option>
                                      <option>options 3</option>
                                      <option>options 4</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="propinsi1">Pillih Propivsi</label>
                                      <select class="form-control" id="propinsi1">
                                      <option>Jawa Barat</option>
                                      <option>Jawa Timur</option>
                                      <option>Jawa Tengah</option>
                                      <option>DKI Jakarta</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="kabupaten1">Pilih Kabupaten</label>
                                      <select multiple class="form-control" id="kabupaten1">
                                      <option>Kabupaten Bogor</option>
                                      <option>Kabupaten Depok</option>
                                      <option>Kabupaten Cirebon</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="">Waktu</label>
                                      <div class="input-group">
                                          <input type="text" class="form-control startdate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate2"/>
                                          <div class="input-group-append">
                                          <span class="input-group-text">s/d</span>
                                          </div>
                                          <input type="text" class="form-control enddate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate2" />
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="file">Unggah jadwal</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="jadwal1">
                                        <label class="custom-file-label" for="file">Pilih File</label>
                                      </div>
                                    </div>
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button type="button" class="btn btn-success">Simpan</button>
                          </div>
                      </div>
                      </div>
                  </div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                      Tanggapan
                    </button>
                  <div class="modal fade" id="tanggapan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Unggah Tanggapan Monev</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              <form action="" role="form">
                                  <div class="form-group">
                                    <label for="file">Unggah Tanggapan</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="tanggapan">
                                        <label class="custom-file-label" for="file">Pilih File</label>
                                      </div>
                                    </div>
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button type="button" class="btn btn-success">Simpan</button>
                          </div>
                      </div>
                      </div>
                  </div>
                  </td>
                  <td>
                    <div class="icheck-success d-inline">
                      <input type="checkbox" id="pilih1">
                      <label for="pilih1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pembangunan</td>
                  <td>
                      Jawa Barat
                  </td>
                  <td>
                      <ul>
                          <li>
                              Kabupaten Bogor
                          </li>
                          <li>
                              Kabupaten Depok
                          </li>
                      </ul>
                  </td>
                  <td>10/01/2020 - 12/02/2020</td>
                  <td><span class="badge badge-pill badge-warning">Dalam Proses</span></td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                      Ubah
                  </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                      Tanggapan
                    </button>
                  </td>
                  <td>
                    <div class="icheck-success d-inline">
                      <input type="checkbox" id="pilih2">
                      <label for="pilih2"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Pembangunan</td>
                  <td>
                      Jawa Barat
                  </td>
                  <td>
                      <ul>
                          <li>
                              Kabupaten Bogor
                          </li>
                          <li>
                              Kabupaten Depok
                          </li>
                      </ul>
                  </td>
                  <td>10/01/2020 - 12/02/2020</td>
                  <td><span class="badge badge-pill badge-danger">Revisi</span></td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                      Ubah
                  </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                      Tanggapan
                    </button>
                  </td>
                  <td>
                    <div class="icheck-success d-inline">
                      <input type="checkbox" id="pilih3">
                      <label for="pilih3"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Pembangunan</td>
                  <td>
                      Jawa Barat
                  </td>
                  <td>
                      <ul>
                          <li>
                              Kabupaten Bogor
                          </li>
                          <li>
                              Kabupaten Depok
                          </li>
                      </ul>
                  </td>
                  <td>10/01/2020 - 12/02/2020</td>
                  <td><span class="badge badge-pill badge-danger">Revisi</span></td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                      Ubah
                  </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                      Tanggapan
                    </button>
                  </td>
                  <td>
                    <div class="icheck-success d-inline">
                      <input type="checkbox" id="pilih4">
                      <label for="pilih4"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Pembangunan</td>
                  <td>
                      Jawa Barat
                  </td>
                  <td>
                      <ul>
                          <li>
                              Kabupaten Bogor
                          </li>
                          <li>
                              Kabupaten Depok
                          </li>
                      </ul>
                  </td>
                  <td>10/01/2020 - 12/02/2020</td>
                  <td><span class="badge badge-pill badge-warning">Dalam Proses</span></td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                      Ubah
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                      Tanggapan
                    </button>
                  </td>
                  <td>
                    <div class="icheck-success d-inline">
                      <input type="checkbox" id="pilih5">
                      <label for="pilih5"></label>
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
            <div class="float-left">
                <!-- Button trigger modal -->
                <a href="" role="button" class="btn btn-primary">Kirim</a>
                    <!-- Modal -->
              <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Form Pengajuan Monev</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="" role="form">
                        <div class="form-group">
                            <label for="propinsi">Pillih Program</label>
                            <select class="form-control" id="program">
                            <option>options 1</option>
                            <option>options 2</option>
                            <option>options 3</option>
                            <option>options 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="propinsi">Pillih Provinsi</label>
                            <select class="form-control" id="propinsi">
                            <option>Jawa Barat</option>
                            <option>Jawa Timur</option>
                            <option>Jawa Tengah</option>
                            <option>DKI Jakarta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">Pilih Kabupaten</label>
                            <select multiple class="form-control" id="kabupaten">
                            <option>Kabupaten Bogor</option>
                            <option>Kabupaten Depok</option>
                            <option>Kabupaten Cirebon</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Waktu</label>
                            <div class="input-group">
                                <input type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                                <div class="input-group-append">
                                <span class="input-group-text">s/d</span>
                                </div>
                                <input type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="file">Unggah jadwal</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="jadwal">
                              <label class="custom-file-label" for="file">Pilih File</label>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Info
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <h5>Batas Unggah Tanggapan Akan Berakhir Dua Minggu Setelah Mengirim Pengajuan</h5>
            </div>
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
