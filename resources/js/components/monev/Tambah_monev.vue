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

      <!-- Default box -->
      <!-- /.row -->
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
                    <th>Aksi</th>
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
                                        <label for="nama">Nama Program</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Program">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pillih Propinsi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label for="">Waktu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control startdate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate2"/>
                                            <div class="input-group-append">
                                            <span class="input-group-text">s/d</span>
                                            </div>
                                            <input type="text" class="form-control enddate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate2" />
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
                    <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Mitra Lokal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="" role="form">
                                    <div class="form-group">
                                        <label for="nama">Nama Mitra</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Mitra">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pillih Propinsi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label for="">Waktu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control startdate3 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate3"/>
                                            <div class="input-group-append">
                                            <span class="input-group-text">s/d</span>
                                            </div>
                                            <input type="text" class="form-control enddate3 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate3" />
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
                    <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Mitra Lokal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="" role="form">
                                    <div class="form-group">
                                        <label for="nama">Nama Program</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Program">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pillih Propinsi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label for="">Waktu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control startdate4 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate4"/>
                                            <div class="input-group-append">
                                            <span class="input-group-text">s/d</span>
                                            </div>
                                            <input type="text" class="form-control enddate4 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate4" />
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
                    <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Mitra Lokal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="" role="form">
                                    <div class="form-group">
                                        <label for="nama">Nama Program</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Program">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pillih Propinsi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label for="">Waktu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control startdate5 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate5"/>
                                            <div class="input-group-append">
                                            <span class="input-group-text">s/d</span>
                                            </div>
                                            <input type="text" class="form-control enddate5 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate5" />
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
                    <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Mitra Lokal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="" role="form">
                                    <div class="form-group">
                                        <label for="nama">Nama Program</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Program">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pillih Propinsi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label for="">Waktu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control startdate6 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate6"/>
                                            <div class="input-group-append">
                                            <span class="input-group-text">s/d</span>
                                            </div>
                                            <input type="text" class="form-control enddate6 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate6" />
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
                                      <label for="nama">Nama Program</label>
                                      <input type="text" class="form-control" id="nama" placeholder="Nama Mitra">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleFormControlSelect1">Pillih Propinsi</label>
                                      <select class="form-control" id="exampleFormControlSelect1">
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
                                      <label for="">Waktu</label>
                                      <div class="input-group">
                                          <input type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                                          <div class="input-group-append">
                                          <span class="input-group-text">s/d</span>
                                          </div>
                                          <input type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
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
          <!-- /.card -->
        </div>
      </div>
      </section>
  </div>

  <!-- /.content-wrapper -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
