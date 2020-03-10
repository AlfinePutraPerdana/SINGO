@extends('layouts.menubar')

@section('menu-tenaga','menu-open')

@section('rekomendasi','active')

@section('list-tenaga','active')

@section('content')
    {{-- <history-tenaga></history-tenaga> --}}

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>History Tenaga Kerja</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/list-tenaga">Tenaga Kerja Asing</a></li>
                    <li class="breadcrumb-item active">History Tenaga Kerja Asing</li>
                    </ol>
                </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">History Data Tenaga Asing</h3>

                        <div class="card-tools">
                            @foreach ($historis as $item)
                            <form action="/list-tenaga/{{$item->id_tenaga}}/history-tenaga" method="GET">
                                @endforeach
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
                        <div class="card-body table-responsive p-0" style="height: 550px;">
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Asal Negara</th>
                                    <th>Nomor Passport</th>
                                    <th>Masa Berlaku pasport</th>
                                    <th>Mitra</th>
                                    <th>Jabatan</th>
                                    <th>Lama Kegiatan</th>
                                    <th>File Foto</th>
                                    <th>File Passport</th>
                                    <th>File Cv</th>
                                    <th>File Jobdesc</th>
                                    <th>File Pendukung</th>
                                    <th>File Perpanjangan</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historis as $histori)
                                    <tr>
                                        <td>{{($historis->currentPage()-1)*$historis->perPage()+$loop->iteration}}</td>
                                        <td>{{$histori -> nama}}</td>
                                        <td>{{$histori -> jenis_kelamin}}</td>
                                        <td>{{$histori -> tempat_lahir}}</td>
                                        <td>{{$histori -> tanggal_lahir}}</td>
                                        <td>{{$histori -> kewarganegaraan}}</td>
                                        <td>{{$histori -> no_passport}}</td>
                                        <td>{{$histori-> tgl_berlaku_awal}} s/d {{$histori-> tgl_berlaku_akhir}}</td>
                                        <td>{{$histori->instansi->nama}}</td>
                                        <td>{{$histori -> jabatan}}</td>
                                        <td>{{$histori -> tgl_awal}} s/d {{$histori -> tgl_akhir}}</td>
                                        <td>{{$histori -> foto}}</td>
                                        <td>{{$histori -> upload_passpor}}</td>
                                        <td>{{$histori -> cv_resume}}</td>
                                        <td>{{$histori -> jobdesc}}</td>
                                        <td>{{$histori -> dokumen_pendukung}}</td>
                                        <td>{{$histori -> file_perpanjangan}}</td>
                                        <td>{{$histori -> status_keaktifan}}</td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a class="btn btn-warning" href="/list-tenaga" role="button"><i class="fas fa-chevron-left"></i> <b> Kembali</b></a>
                            <div class="pagination pagination-sm m-0 float-right">
                                {{ $historis->links() }}
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection