@extends('layouts.menufasker')

@section('menu-mitra','menu-open')

@section('mitra','active')

@section('data-mitra','active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemberdayaan Mitra Lokal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemberdayaan Mitra Lokal</li>
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
              <h3 class="card-title">Daftar Mitra Lokal</h3>
              <div class="card-tools">
                <form action="/mitra" method="GET">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 350px;">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="text-center">Nama Mitra Lokal</th>
                    <th class="text-center">Alamat Mitra Lokal</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($mitras->isEmpty())
                  <tr align="center">
                    <td colspan="4" class="text-center"><i class="fas fa-exclamation-circle"></i> <b>DATA TIDAK DI TEMUKAN</b> <i class="fas fa-exclamation-circle"></i></td>
                  </tr>
                  @else
                    @foreach ($mitras as $mitra)
                    <tr>
                        <td>{{($mitras->currentPage() - 1)*$mitras->perPage()+$loop->iteration}}</td>
                        <td class="text-center">{{$mitra->nama}}</td>
                        <td class="text-center">{{$mitra->alamat}}</td>
                        <td class="text-center"><a href="/master-mitra/{{$mitra->id}}/data" class="btn btn-sm btn-info"><i class="far fa-eye"></i> <b>Lihat</b></a></td>
                    </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{ $mitras->links() }}
                </ul>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection
