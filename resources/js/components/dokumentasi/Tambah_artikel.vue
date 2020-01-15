<template>
          <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Artikel</a></li>
              <li class="breadcrumb-item active">Tambah Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary card-outline">
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input class="form-control" placeholder="Judul Artikel">
          </div>
          <div class="form-group">
            <label>Tanggal</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
              </div>
              <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
            </div>
            <!-- /.input group -->
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control col-sm-2">
              <option>Kisah Sukses</option>
              <option>Berita</option>
            </select>
          </div>
          <div class="form-group">
              <textarea id="compose-textarea" class="form-control" style="height: 300px">
              </textarea>
          </div>
          <div class="form-group">
            <div class="btn btn-default btn-file">
              <i class="fas fa-paperclip"></i> Attachment
              <input type="file" name="attachment">
            </div>
            <p class="help-block">Max. 32MB</p>
          </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
            <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Kirim</button>
          </div>
          <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Simpan</button>
        </div>
        <!-- /.card-footer -->
      </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

<!-- Page Script -->

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
