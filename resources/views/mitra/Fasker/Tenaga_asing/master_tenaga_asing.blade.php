@extends('layouts.menufasker')
@section('content')
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
              <h3 class="card-title">Rekomendasi Tenaga Asing </h3>

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
            <div class="card-body table-responsive p-0" style="height: 450px;">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Asal Negara</th>
                    <th colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td align="center">Andy Woods</td>
                    <td align="center">Singapura</td>
                    <td align="right"><a href="/data-tenaga" class="btn btn-sm btn-primary" role="button"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                    <td><a href="/history-tenaga" class="btn btn-sm btn-info" role="button"><i class="far fa-eye"></i> <b>History</b></a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td align="center">Andy Woods</td>
                    <td align="center">Singapura</td>
                    <td align="right"><a href="/data-tenaga" class="btn btn-sm btn-primary" role="button"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                    <td><a href="/history-tenaga" class="btn btn-sm btn-info" role="button"><i class="far fa-eye"></i> <b>History</b></a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td align="center">Andy Woods</td>
                    <td align="center">Singapura</td>
                    <td align="right"><a href="/data-tenaga" class="btn btn-sm btn-primary" role="button"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                    <td><a href="/history-tenaga" class="btn btn-sm btn-info" role="button"><i class="far fa-eye"></i> <b>History</b></a></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td align="center">Andy Woods</td>
                    <td align="center">Singapura</td>
                    <td align="right"><a href="/data-tenaga" class="btn btn-sm btn-primary" role="button"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                    <td><a href="/history-tenaga" class="btn btn-sm btn-info"><i class="far fa-eye" role="button"></i> <b>History</b></a></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td align="center">Andy Woods</td>
                    <td align="center">Singapura</td>
                    <td align="right"><a href="/data-tenaga" class="btn btn-sm btn-primary" role="button"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                    <td><a href="/history-tenaga" class="btn btn-sm btn-info"><i class="far fa-eye" role="button"></i> <b>History</b></a></td>
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
@endsection
