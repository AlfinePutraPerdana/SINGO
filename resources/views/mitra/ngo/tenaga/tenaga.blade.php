@extends('layouts.menubar')

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
                    <div class="card-body table-responsive p-0" style="height: 350px;">
                        <form action="">
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Asal Negara</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <th>Pilih</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @php
                                      $no = 1;
                                  @endphp
                                  @foreach ($tenaga as $ten)
                                  <tr>
                                  <td>{{$no++}}</td>
                                  <td>{{$ten -> nama}}</td>
                                      <td>{{ $ten -> kewarganegaraan }}</td>
                                      <td><span class="badge badge-info">Dalam Proses</span></td>
                                      <td><a href="/tenaga/{{$ten -> id}}/edit"  class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Ubah</a></td>
                                      <td>
                                      <div class="icheck-success d-inline">
                                          <input type="checkbox" name="tenaga[]" value="{{ $ten->id }}">
                                          <label for="{{ $ten->id }}"></label>
                                      </div>
                                      </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                        <div class="card-footer clearfix">
                            <div class="col-md-4 float-left">
                                <a href="/proses-tenaga" role="button" class="btn btn-primary"><i class="far fa-paper-plane"></i> <b>Kirim</b></a>
                            </div>
                                {{ $tenaga->links() }}
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection


