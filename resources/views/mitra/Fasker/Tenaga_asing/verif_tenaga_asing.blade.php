@extends('layouts.menufasker')

@section('menu-open','menu-open')

@section('menu-verif','active')

@section('verif-tenaga','active')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekomendasi Tenaga Kerja Asing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Verifikasi Tenaga Kerja Asing</li>
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
                        <h3 class="card-title">Rekomendasi Tenaga Asing</h3>

                        <div class="card-tools">
                            <form action="/verif-tenaga-asing" method="GET">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 350px;">
                        <form action="">
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Asal Negara</th>
                                    {{-- <th>Mitra</th> --}}
                                    <th class="text-center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if ($tenagas->isEmpty())
                                        <tr align="center">
                                            <td colspan="5" class="text-center"><i class="fas fa-exclamation-circle"></i> <b>DATA TIDAK DI TEMUKAN</b> <i class="fas fa-exclamation-circle"></i></td>
                                        </tr>
                                    @else
                                        @foreach ($tenagas as $tenaga)
                                        <tr align="center">
                                            <td>{{($tenagas->currentPage() - 1)*$tenagas->perPage()+$loop->iteration}}</td>
                                            <td>{{$tenaga->nama}}</td>
                                            <td>{{$tenaga->kewarganegaraan}}</td>
                                            {{-- <td>{{$tenaga->instansi->nama}}</td> --}}
                                            <td><a href="/verif-tenaga-asing/{{$tenaga->id}}/verifikasi" class="btn btn-sm btn-primary"><i class="far fa-check-circle"></i> <b>Verifikasi</b></a>
                                            @endforeach
                                        </tr> 
                                    @endif
                                </tbody>
                            </table>
                        </form>
                    </div>
                        <div class="card-footer clearfix">
                            <div class="col-md-4 float-left">
                                {{-- <a href="/master-tamu" role="button" class="btn btn-block btn-primary"><i class="far fa-check-square"></i>   Verifikasi</a> --}}
                            </div>

                            {{ $tenagas->links() }}
                            
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
