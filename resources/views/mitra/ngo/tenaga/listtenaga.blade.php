@extends('layouts.menubar')


@section('content')

{{-- <list-tenaga></list-tenaga> --}}

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
                <form action="/list-tenaga" method="GET">
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
            <div class="card-body table-responsive p-0" style="height: 450px;">
              <table class="table table-head-fixed">
                  @php
                      $no = 1;
                  @endphp
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Asal Negara</th>
                    <th class="text-center">Mitra</th>
                    <th class="text-center">Status</th>
                    <th colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tenagas as $tenaga)
                    <tr>
                      <td>{{$no++}}</td>
                      <td align="center">{{$tenaga->nama}}</td>
                      <td align="center">{{$tenaga->kewarganegaraan}}</td>
                      <td align="center">{{$tenaga->instansi->nama}}</td>
                      <td align="center">
                        @if ($tenaga->status_keaktifan == "Aktif")
                          <span class="badge badge-info"><i class="far fa-check-circle"></i> <strong>Aktif</strong></span>
                        @elseif ($tenaga->status_keaktifan == "Non-Aktif")
                          <span class="badge badge-danger">Non-Aktif</span>
                        @else
                          <span></span>
                        @endif</td>
                        @if ($tenaga->status_keaktifan == "Aktif")
                          <td align="right"><a href="/list-tenaga/{{$tenaga->id}}/edit" class="btn btn-sm btn-primary" role="button"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                          <td><a href="/list-tenaga/{{$tenaga->id}}/history-tenaga" class="btn btn-sm btn-info" role="button"><i class="fas fa-history"></i> <b>History</b></a></td>
                        @else
                          <td></td>
                          <td></td>
                        @endif
                    </tr> 
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{ $tenagas->links() }}
                </ul>
            </div>
          </div>
      </div>
    </div>
  </section>
</div>

@endsection



