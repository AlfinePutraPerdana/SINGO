<template>
         <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Tahunan</li>
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
            <h3 class="card-title">Form Laporan Tahunan</h3>
          </div>
          <form role="form">
            <div class="card-body">
                <div class="form-group">
                  <label for="">Judul Laporan</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Rencana Kegiatan Tahunan</label>
                  <select name="" id="" class="form-control">
                    <option value="" selected>Pilih Kegiatan</option>
                    <option value="">options 1</option>
                    <option value="">options 2</option>
                    <option value="">options 3</option>
                    <option value="">options 4</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Pendahuluan</label>
                    <textarea id="pendahuluan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Tujuan</label>
                    <textarea id="tujuan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Sasaran</label>
                    <textarea id="sasaran" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Hasil Yang diharapkan</label>
                    <textarea id="hasil" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Lokasi Pelaksanaan dan Penerima Manfaat</label>
                    <textarea id="lokasi" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Kegiatan yang Dilaksanakan</label>
                    <textarea id="kegiatan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Tenaga Kerja dan Ahli yang Digunakan</label>
                    <textarea id="tenaga" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                    </textarea>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-6">
                      <label>Pembiayaan</label>
                      <select class="form-control">
                        <option selected>Pilih Mata Uang</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="">Besar Nominal</label>
                      <input type="number" class="form-control" id="nominal" placeholder="Masukan nominal">
                    </div>
                </div>
                <div class="form-group">
                  <label for="">Rincian Anggaran</label>
                  <textarea id="dana" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                  </textarea>
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
