<template>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tenaga Kerja Asing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tenaga Kerja Asing</li>
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
                        <h3 class="card-title">Rekomendasi Tenaga Asing <a href="/ajukan-tenaga" class="badge badge-pill badge-primary">Tambah Rekomendasi</a></h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 450px;">
                        <table class="table table-head-fixed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Asal Negara</th>
                                <th>Nomor Passport</th>
                                <th>Masa Berlaku Passport</th>
                                <th>NGO</th>
                                <th>Tujuan Kegiatan</th>
                                <th>Jabatan</th>
                                <th>Lama Kegiatan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                <th>Pilih Tenaga</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Andy Woods</td>
                                <td>Singapura</td>
                                <td>9998887776666</td>
                                <td>12-11-2020</td>
                                <td>LSM</td>
                                <td>Bermanfaat</td>
                                <td>Pekerja</td>
                                <td>1 Tahun</td>
                                <td><span class="badge badge-info">Dalam Proses</span></td>
                                <td><a href="/revisi-tenaga" class="badge badge-pill badge-primary">Ubah</a></td>
                                <td>
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="pilih1">
                                    <label for="pilih1"></label>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Andy Woods</td>
                                <td>Singapura</td>
                                <td>9998887776666</td>
                                <td>12-11-2020</td>
                                <td>LSM</td>
                                <td>Bermanfaat</td>
                                <td>Pekerja</td>
                                <td>1 Tahun</td>
                                <td><span class="badge badge-info">Dalam Proses</span></td>
                                <td><a href="revisitenaga.html" class="badge badge-pill badge-primary">Ubah</a></td>
                                <td>
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="pilih2">
                                    <label for="pilih2"></label>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Andy Woods</td>
                                <td>Singapura</td>
                                <td>9998887776666</td>
                                <td>12-11-2020</td>
                                <td>LSM</td>
                                <td>Bermanfaat</td>
                                <td>Pekerja</td>
                                <td>1 Tahun</td>
                                <td><span class="badge badge-info">Dalam Proses</span></td>
                                <td><a href="/revisi-tenaga" class="badge badge-pill badge-primary">Ubah</a></td>
                                <td>
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="pilih3">
                                    <label for="pilih3"></label>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andy Woods</td>
                                <td>Singapura</td>
                                <td>9998887776666</td>
                                <td>12-11-2020</td>
                                <td>LSM</td>
                                <td>Bermanfaat</td>
                                <td>Pekerja</td>
                                <td>1 Tahun</td>
                                <td><span class="badge badge-info">Dalam Proses</span></td>
                                <td><a href="/revisi-tenaga" class="badge badge-pill badge-primary">Ubah</a></td>
                                <td>
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="pilih4">
                                    <label for="pilih4"></label>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Andy Woods</td>
                                <td>Singapura</td>
                                <td>9998887776666</td>
                                <td>12-11-2020</td>
                                <td>LSM</td>
                                <td>Bermanfaat</td>
                                <td>Pekerja</td>
                                <td>1 Tahun</td>
                                <td><span class="badge badge-info">Dalam Proses</span></td>
                                <td><a href="/revisi-tenaga" class="badge badge-pill badge-primary">Ubah</a></td>
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
                    <div class="card-footer clearfix">
                        <div class="col-md-4 float-left">
                            <a href="/proses-tenaga" role="button" class="btn btn-primary">Kirim Rekomendasi</a>
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
