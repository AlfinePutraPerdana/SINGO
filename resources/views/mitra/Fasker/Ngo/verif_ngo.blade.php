@extends('layouts.menufasker')
@section('akun','active')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Verifikasi akun NGO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Verifikasi Akun NGO</li>
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
                        <h3 class="card-title">Daftar NGO Yang Melakukan Registrasi</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 450px;">
                    <form action="/verif-akun" method="GET" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Akun</th>
                                    <th>Email</th>
                                    <th>Aksi</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @if ($akun->isEmpty())
                                    <tr align="center">
                                        <td colspan="6" class="text-center"><i class="fas fa-exclamation-circle"></i> <b>DATA TIDAK DI TEMUKAN</b> <i class="fas fa-exclamation-circle"></i></td>
                                      </tr>
                                    @else
                                      @foreach ($akun as $row)
                                <tr>
                                <td>{{($akun->currentPage() - 1)*$akun->perPage()+$loop->iteration }}</td>
                                <td>{{$row-> name}}</td>
                                <td>{{$row-> email}}</td>
                                <td><a href="/verif-akun/{{$row->id}}/verifikasi" class="btn btn-sm btn-primary"><i class="far fa-check-circle"></i> <b>Verifikasi</b></a>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </form>
                    </div>
                        <div class="card-footer clearfix">
                            <div class="col-md-4 float-left">
                            <!--<a href="/verif" role="button" class="btn btn-block btn-primary"><i class="far fa-check-square"></i>   Verifikasi</a> -->
                            </div>
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
