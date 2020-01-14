<template>
         <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Keuangan Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Keuangan Tahunan</li>
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
                <h3 class="card-title">Form Laporan Keuangan Tahunan</h3>
              </div>
              <form role="form">
                <div class="card-body">

                <div class="form-group">
                    <label for="">Pendahuluan</label>
                    <textarea id="pendahuluan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label>Sasaran</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" placeholder="tujuan">
                  </div>
                  <div class="form-group">
                    <label for="hasil">Hasil Yang Diharapkan</label>
                    <input type="text" class="form-control" id="hasil" placeholder="hasil yang diharapkan">
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Lokasi  Pelaksanaan</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="hasil">Kegiatan</label>
                    <input type="text" class="form-control" id="hasil" placeholder="hasil yang diharapkan">
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Tenaga Kerja</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="peran_serta">Peran Serta Pihak Ketiga</label>
                    <input type="text" class="form-control" id="peran" placeholder="Peran Serta Pihak Ketiga">
                  </div>
                  <div class="form-group">
                    <label for="biaya">Pembiayaan</label>
                    <input type="number" class="form-control" id="biaya" placeholder="Besar Biaya">
                  </div>
                  <div class="form-group">
                    <label for="">Masalah dan Upaya Pemecahan</label>
                    <textarea id="upaya" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                  <div class="form-group">
                    <label for="">Penutup</label>
                    <textarea id="penutup" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                  <div class="form-group">
                    <label for="file">Lampiran File</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file">
                        <label class="custom-file-label" for="file">Pilih File</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="upload">Unggah</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a class="btn btn-primary" href="/ltk" role="button">Simpan</a>
                </div>
              </form>
            </div>
          <!-- /.col-->
            </div>
        </div>
        <!-- ./row -->
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
