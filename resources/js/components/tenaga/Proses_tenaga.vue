<template>
    
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
              <li class="breadcrumb-item active">Sedang Proses</li>
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
            <h3 class="card-title">Rekomendasi Tenaga Asing</h3>
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
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Asal Negara</th>
                  <th>Jabatan</th>
                  <th>Lama Kegiatan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Andy Woods</td>
                  <td>Singapura</td>
                  <td>Pekerja</td>
                  <td>1 Tahun</td>
                  <td><span class="badge badge-warning">Dalam Proses</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Andy Woods</td>
                  <td>Singapura</td>
                  <td>Pekerja</td>
                  <td>2 Tahun</td>
                  <td><span class="badge badge-warning">Dalam Proses</span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Andy Woods</td>
                  <td>Singapura</td>
                  <td>Pekerja</td>
                  <td>3 Tahun</td>
                  <td><span class="badge badge-warning">Dalam Proses</span></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Andy Woods</td>
                  <td>Singapura</td>
                  <td>Pekerja</td>
                  <td>4 Tahun</td>
                  <td><span class="badge badge-warning">Dalam Proses</span></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Andy Woods</td>
                  <td>Singapura</td>
                  <td>Pekerja</td>
                  <td>5 Tahun</td>
                  <td><span class="badge badge-warning">Dalam Proses</span></td>
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
