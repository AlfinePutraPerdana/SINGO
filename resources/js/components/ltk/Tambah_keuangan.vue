<template>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Keuangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Keuangan</li>
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
            <h3 class="card-title">Laporan Keuangan</h3>
          </div>
          <form role="form">
            <div class="card-body">
                <div class="form-group">
                  <label for="">Judul Laporan</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Rencana Induk Kegiatan</label>
                  <select name="" id="" class="form-control">
                    <option value="" selected>pilih kegiatan</option>
                    <option value="">options 1</option>
                    <option value="">options 2</option>
                    <option value="">options 3</option>
                    <option value="">options 4</option>
                    <option value="">options 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Rencana Kerja Tahunan</label>
                  <select name="" id="" class="form-control">
                    <option value="" selected>pilih kegiatan</option>
                    <option value="">options 1</option>
                    <option value="">options 2</option>
                    <option value="">options 3</option>
                    <option value="">options 4</option>
                    <option value="">options 5</option>
                  </select>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="">Pembiayaan</label>
                    <select name="" id="" class="form-control">
                      <option value="" selected>Pilih Mata Uang Asing</option>
                      <option value="">options 1</option>
                      <option value="">options 2</option>
                      <option value="">options 3</option>
                      <option value="">options 4</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Besar Nominal</label>
                  <input type="number" class="form-control" placeholder="Masukan Nominal">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="">Pembiayaan(Rp)</label>
                  <input type="number" class="form-control" placeholder="Masukan Nominal">
                </div>
                <div class="form-group">
                  <label for="file">Unggah Laporan Keuangan</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="keuangan">
                      <label class="custom-file-label" for="file">Pilih File</label>
                    </div>
                  </div>
                </div>
            </div>
                
            <div class="card-footer">
              <a class="btn btn-primary" href="/lk" role="button">Simpan</a>
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
