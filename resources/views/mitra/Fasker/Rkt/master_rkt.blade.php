@extends('layouts.menufasker')

@section('menu-rkt','menu-open')

@section('rencana','active')

@section('data-rkt','active')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rencana Kerja Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rencana Kerja Tahunan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Rencana Kerja Tahunan</h3>  
                
              <div class="card-tools">
                <form action="/list-rkt" method="GET">
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
                    <tr class="text-center">
                      <th>No</th>
                      <th>Judul Rencana</th>
                      <th colspan="2" >Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($rencanas as $rencana)
                      <tr align="center">
                        <td >{{($rencanas->currentPage()-1)*$rencanas->perPage()+$loop->iteration}}</td>
                        <td>{{ $rencana->judul }}</td>
                        <td>
                          <a href="/master-rkt/{{ $rencana->id }}/data" class="btn btn-sm btn-primary"><i class="far fa-eye"></i> <b>Lihat</b></a>
                        </td>
                        <td>
                          <a href="/master-rkt/{{ $rencana->id }}/edit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>ubah</b></a>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
            </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      {{ $rencanas->links() }}
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection