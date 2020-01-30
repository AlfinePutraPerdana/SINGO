<template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Mitra Lokal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/mitra">Pemberdayaan Mitra Lokal</a></li>
            <li class="breadcrumb-item active">Lihat Data Mitra</li>
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
            <h3 class="card-title">Data Mitra Lokal</h3>
          </div>
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama Mitra</label>
                  <input type="text" class="form-control" id="nama" placeholder="">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Mitra</label>
                    <input type="text" class="form-control" id="alamat" placeholder="">
                </div>
                <div class="form-group">
                    <label for="izin">Nomor Izin Registrasi</label>
                    <input type="text" class="form-control" id="izin" placeholder="">
                </div>
                <div class="form-group">
                    <label>Nama Program</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="biaya">Pembiayaan</label>
                    <input type="number" class="form-control" id="biaya" placeholder="">
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

                <div class="card-footer">
                    <a class="btn btn-warning" href="/mitra" role="button"><i class="fas fa-chevron-left"></i> <b>Kembali</b></a>
                </div>
              <!-- /.card-body -->
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
