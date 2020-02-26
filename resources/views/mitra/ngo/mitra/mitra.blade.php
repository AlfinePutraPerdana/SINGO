@extends('layouts.menubar')


@section('content')

{{-- <instansi-lokal></instansi-lokal> --}}

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
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed">
                <thead>
                    @php
                        $no= 1;
                    @endphp
                  <tr>
                    <th>No</th>
                    <th class="text-center">Nama Mitra Lokal</th>
                    <th class="text-center">Alamat Mitra Lokal</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mitras as $mitra)
                    <tr>
                        <td>{{$no++}}</td>
                        <td class="text-center">{{$mitra->nama}}</td>
                        <td class="text-center">{{$mitra->alamat}}</td>
                        <td class="text-center"><a href="/mitra/{{$mitra->id}}/data-mitra" class="btn btn-sm btn-info"><i class="far fa-eye"></i> <b>Lihat</b></a></td>
                    </tr>
                  @endforeach
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



