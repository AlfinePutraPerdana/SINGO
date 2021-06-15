@extends('layouts.menubar')


@section('content')

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
              <li class="breadcrumb-item"><a href="/artikel">Artikel</a></li>
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
        <form action="/artikel/store" method="post" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
          <input type="hidden" name="status" value="0">
          <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input class="form-control" name="judul" placeholder="Judul Artikel">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control col-sm-2" name="kategori">
              <option value="Kisah Sukses">Kisah Sukses</option>
              <option value="Berita">Berita</option>
              <option value="Hasil Penelitian">Hasil Penelitian</option>
              <option value="Modul">Modul</option>
            </select>
          </div>
          <div class="form-group">
              <textarea name="artikel" id="compose-textarea" class="form-control" style="height: 300px">
              </textarea>
          </div>
          <div class="form-group">
            <label for="file">Unggah Foto</label>
            <div class="input-group">
                <div class="custom-file">
                    <input name="foto" type="file" class="custom-file-input" id="foto">
                    <label class="custom-file-label" for="file">Pilih Foto</label>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="file">Unggah Video</label>
            <div class="input-group">
                <div class="custom-file">
                    <input name="video" type="file" class="custom-file-input" id="video">
                    <label class="custom-file-label" for="file">Pilih Video</label>
                </div>
            </div>
          </div>

          <div class="card-footer">
            <input type="submit" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </section>
</div>

@endsection