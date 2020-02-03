<template>
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rencana Kerja Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/rkt">Rencana Kerja Tahunan</a></li>
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
                <h3 class="card-title">Form Rencana Kerja Tahunan</h3>
              </div>
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                      <label for="">Judul Rencana</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Rencana Induk Kegiatan</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="">Pendahuluan</label>
                      <textarea id="pendahuluan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Sasaran</label>
                      <textarea id="sasaran" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="tujuan">Tujuan</label>
                      <input type="text" class="form-control" id="tujuan" placeholder="tujuan">
                  </div>
                  <div class="form-group">
                      <label for="">Hasil Yang diharapkan</label>
                      <textarea id="diharapkan" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Mitra Lokal </label>
                      <select name="" id="" class="form-control">
                        <option value="">options 1</option>
                        <option value="">options 2</option>
                        <option value="">options 3</option>
                        <option value="">options 4</option>
                      </select>
                  </div>
                  <!-- <div class="form-row mb-3">
                      <div class="form-group col-md-9">
                        <label for="">Tenaga Asing </label>
                        <input type="text" class="form-control" id="asing" placeholder="Tenaga Asing">
                      </div>
                      <div class="fom-group col-md-3">
                        <label for="">Jumlah Tenaga</label>
                        <input type="number" class="form-control" placeholder="Jumlah Tenaga" id="tenaga-asing">
                      </div>
                  </div> -->
                  <div class="form-group">
                      <label for="">Peran Serta Pihak Ketiga</label>
                      <textarea id="pihak" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Lokasi Pelaksanaan</label>
                      <textarea id="lokasi" class="form-control" style="height: 300px" placeholder="Masukan Teks">
                      
                      </textarea>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <label>Mata Uang</label>
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
                      <input type="number" class="form-control" id="nominal" placeholder="Masukan Besaran">
                    </div>
                  </div>
                  <div class="form-group mt-3">
                      <label for="">Rincian Dana</label>
                      <textarea id="dana" class="form-control" style="height: 300px" placeholder="Masukan Teks">

                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Jadwal Pelaksanaan</label>
                    <div class="input-group">
                      <input type="text" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                      <div class="input-group-append">
                        <span class="input-group-text">s/d</span>
                      </div>
                      <input type="text" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                    </div>
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
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="file">Unggah BAP</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bap">
                        <label class="custom-file-label" for="bap">Pilih File</label>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="card-footer">
                    <a class="btn btn-primary" href="/rkt" role="button"><i class="far fa-save"></i> <b>Simpan</b></a>
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
