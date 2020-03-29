@extends('layouts.menubar')

@section('permintaan','active')

@section('open','menu-open')

@section('tambah-tenaga','active')
    

@section('content')

  {{-- <tenaga-kerja></tenaga-kerja> --}}
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
                        <h3 class="card-title">Rekomendasi Tenaga Asing <a href="/ajukan-tenaga" class="btn btn-primary btn-sm" role="button"><i class="fas fa-plus-circle"></i> <b>Tambah</b></a></h3>

                        <div class="card-tools">
                            <form action="/tenaga" method="GET">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form action="/tenaga/send" method="POST"  enctype="multipart/form-data">
                    <div class="card-body table-responsive p-0" style="height: 350px;">
                            {{ csrf_field() }}
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Asal Negara</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Pilih</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @if ($tenaga->isEmpty())
                                    <tr align="center">
                                      <td colspan="6" class="text-center"><i class="fas fa-exclamation-circle"></i> <b>DATA TIDAK DI TEMUKAN</b> <i class="fas fa-exclamation-circle"></i></td>
                                    </tr>
                                  @else
                                    @foreach ($tenaga as $ten)
                                    <tr align="center">
                                      <td>{{($tenaga->currentPage() - 1)*$tenaga->perPage()+$loop->iteration}}</td>
                                      <td>{{$ten -> nama}}</td>
                                      <td>{{ $ten -> kewarganegaraan }}</td>
                                      <td>
                                        @if ($ten->status == 1)
                                            <span class="badge badge-info">Dalam Proses</span>      
                                        @elseif ($ten->status == 2)
                                          <span class="badge badge-danger">Revisi</span>
                                        @else 
                                          <span></span> 
                                        @endif 
                                      </td> 
                                      <td>
                                        @if ($ten->status == 0)
                                            <a href="/tenaga/{{$ten -> id}}/edit"  class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Ubah</a> 
                                        @elseif ($ten->status == 2)
                                          <a href="/tenaga/{{$ten -> id}}/edit"  class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Ubah</a>
                                        @else
                                          <span></span>
                                        @endif  
                                      </td>
                                      <td>
                                      <div class="icheck-success d-inline">
                                          @if ($ten->status == 0)
                                            <input type="checkbox" name="tenaga[]" value="{{ $ten->id }}" id="{{ $ten->id }}">
                                            <label for="{{ $ten->id }}"></label>
                                          @elseif ($ten->status == 2)
                                            <input type="checkbox" name="tenaga[]" value="{{ $ten->id }}" id="{{ $ten->id }}">
                                            <label for="{{ $ten->id }}"></label>
                                          @else
                                            <span></span>
                                          @endif
                                      </div>
                                      </td>
                                    </tr>  
                                    @endforeach
                                  @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            {{-- <a href="{{ url('/tenaga/send') }}" role="button" class="btn btn-primary">kirim</a> --}}
                            <button  type="submit"  class="btn btn-primary"><i class="far fa-paper-plane"></i> <b>Kirim</b></button>
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $tenaga->links() }}
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>   
</div>

  
@endsection


