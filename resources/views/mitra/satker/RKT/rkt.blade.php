@extends('layouts.menubarsatker')

@section('menu-rkt','menu-open')

@section('rencana','active')

@section('verif-rkt','active')

@section('content')

{{--  <rencana-tahunan></rencana-tahunan> --}}

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
              <h3 class="card-title">Rencana Kerja Tahunan </h3>  
                
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
            <div class="card-body table-responsive p-0" style="height: 400px;">
              <form action="">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Judul Rencana</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($rencanas as $rencana)
                      <tr>
                        <td align="center">{{ ($rencanas->currentPage()-1)*$rencanas->perPage()+$loop->iteration }}</td>
                        <td align="center">{{ $rencana->judul }}</td>
                        <td align="center"><a href="/satker/rkt/{{ $rencana->id }}/verifikasi" class="btn btn-sm btn-primary"><i class="far fa-check-circle"></i> <b>Verifikasi</b></a></td>
                      </tr>      
                      @endforeach
                  </tbody>
                </table>
            </div>
                <div class="card-footer clearfix">
                   {{ $rencanas->links() }}
                </div>
              </form>
            <!-- /.card-body -->
            </div>
        </div>
      </div>
    </section>
</div>

@endsection




