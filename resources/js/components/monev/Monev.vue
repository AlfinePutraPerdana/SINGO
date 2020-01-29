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
              <h3 class="card-title">Daftar Pengajuan Monev </h3>

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
            <form action="">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Program</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Pembangunan Pemerintah Daerah</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                        <i class="fas fa-exclamation-circle"></i> <b>Tanggapan</b>
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
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                      <button type="button" class="btn btn-success">Simpan</button>
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
                    <td>Pembangunan Pemerintah Daerah</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                       <i class="fas fa-exclamation-circle"></i> <b>Tanggapan</b>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Pembangunan Pemerintah Daerah</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                        <i class="fas fa-exclamation-circle"></i> <b>Tanggapan</b>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Pembangunan Pemerintah Daerah</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                        <i class="fas fa-exclamation-circle"></i> <b>Tanggapan</b>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Pembangunan Pemerintah Daerah</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tanggapan">
                        <i class="fas fa-exclamation-circle"></i> <b>Tanggapan</b>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
              <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
              </div>
            <!-- /.card-body -->
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">
                <i class="fas fa-info-circle"></i>
                <b>Info</b>
              </h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <h5>Batas Unggah Tanggapan Akan Berakhir Dua Minggu Setelah Pengajuan Diterima</h5>
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
