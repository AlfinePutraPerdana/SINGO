<template>
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemberdayaan Instansi Lokal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemberdayaan Instansi Lokal</li>
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
              <h3 class="card-title">Daftar Instansi Lokal</h3>

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
            <div class="card-body table-responsive p-0" style="height: 350px;">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mitra Lokal</td>
                    <td>Jl Baru</td>
                    <td>Mitra</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                        Ubah
                    </button>
                    <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Instansi Lokal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="" role="form">
                                    <div class="form-group">
                                        <label for="nama">Nama Instansi</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Mitra">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Instansi</label>
                                        <input type="text" class="form-control" id="alamat" placeholder="Alamat Mitra">
                                    </div>
                                    <div class="form-group">
                                        <label for="registrasi">Nomor Izin Registrasi</label>
                                        <input type="text" class="form-control" id="registrasi" placeholder="Nomor Registrasi">
                                    </div>
                                    <div class="form-group">
                                      <label>Nama Program</label>
                                      <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pembiayaan</label>
                                        <input type="number" class="form-control" id="biaya2">
                                    </div>
                                    <div class="form-group">
                                          <label for="">Durasi</label>
                                          <div class="input-group">
                                            <input type="text" class="form-control startdate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate2"/>
                                            <div class="input-group-append">
                                              <span class="input-group-text">s/d</span>
                                            </div>
                                            <input type="text" class="form-control enddate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate2" />
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Mitra Lokal</td>
                    <td>Jl Baru</td>
                    <td>Mitra</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                        Ubah
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mitra Lokal</td>
                    <td>Jl Baru</td>
                    <td>Mitra</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                        Ubah
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Mitra Lokal</td>
                    <td>Jl Baru</td>
                    <td>Mitra</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                        Ubah
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Mitra Asing</td>
                    <td>Jl Baru</td>
                    <td>Mitra</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                        Ubah
                    </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <div class=" float-left">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                        Tambah Mitra
                  </button>
                    <!-- Modal -->
                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Instansi Lokal</h5>
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
                                  <label for="alamat">Alamat Mitra</label>
                                  <input type="text" class="form-control" id="alamat" placeholder="Alamat Mitra">
                              </div>
                              <div class="form-group">
                                  <label for="registrasi">Nomor Izin Registrasi</label>
                                  <input type="text" class="form-control" id="registrasi" placeholder="Nomor Registrasi">
                              </div>
                              <div class="form-group">
                                  <label>Nama Program</label>
                                <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="">Pembiayaan</label>
                                <input type="number" class="form-control" id="biaya" placeholder="Besar nominal">
                              </div>
                              <div class="form-group">
                                <label for="">Durasi</label>
                                <div class="input-group">
                                  <input type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                                  <div class="input-group-append">
                                    <span class="input-group-text">s/d</span>
                                  </div>
                                  <input type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                                </div>
                              </div>

                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
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
