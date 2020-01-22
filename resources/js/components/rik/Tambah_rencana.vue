<template>
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rencana Induk Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Rencana</li>
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
            <h3 class="card-title">Rencana Induk Kegiatan</h3>
          </div>
          <form role="form">
            <div class="card-body">
                <div class="form-group">
                  <label>Mitra Kerja</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Mitra Koordinator Lapangan</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Mitra Koordinator Kemendagri</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Lokasi</label>
                  <input type="text" class="form-control">
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
                  <label>Pendanaan</label>
                  <input type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Sumber Dana</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Ruang Lingkup</label>
                  <textarea class="form-control"  rows="2"></textarea>
                </div>
            </div>
                
            <div class="card-footer">
              <a class="btn btn-primary" href="/ltk" role="button">Simpan</a>
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
