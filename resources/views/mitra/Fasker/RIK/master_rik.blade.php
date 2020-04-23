@extends('layouts.menufasker')
@section('content')
   {{-- <draft-rik></draft-rik> --}}
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master RIK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master RIK</li>
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
                        <h3 class="card-title">Rencana Induk Kerja</h3>

                        <div class="card-tools">
                            <form action="/master-rik" method="GET">
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
                        <tr>
                          <th>No</th>
                          <th>Nama Program</th>
                          <th>Nama Kegiatan</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if ($program->isEmpty())
                                      <tr align="center">
                                          <td colspan="6" class="text-center"><i class="fas fa-exclamation-circle"></i> <b>DATA TIDAK DI TEMUKAN</b> <i class="fas fa-exclamation-circle"></i></td>
                                        </tr>
                                      @else
                                  @foreach ($program as $rik)
                                  <tr>
                                      <td>{{($program->currentPage() - 1)*$program->perPage()+$loop->iteration }}</td>
                                      <td>{{$rik->nama}}</td>
                                      <td>
                                              @foreach($kegiatan as $kgt)
                                              @if($kgt->id_program == $rik->id)
                                              <ul>
                                                   <li><a href="/revisi-kegiatan/{{$kgt->id}}"> <b>{{$kgt->name}}</b></a></li>
                                                  </ul>
                                              @endif

                                              @endforeach

                                      </td>

                                      {{-- <td align="right"><a href="/revisi-kegiatan" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>Ubah</b></a> </td> --}}
                                      <td></td>
                                      <td align="center"><a  href="/draft-rik/{{$rik->id}}/tambah-kegiatan" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> <b>Verifikasi</b></a></td>
                                    </tr>
                                  </tbody>
                                  @endforeach
                              @endif

                    </table>
                  </div>
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
