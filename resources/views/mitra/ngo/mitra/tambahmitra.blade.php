@extends('layouts.menubar')

@section('content')

 {{-- <tambah-instansi></tambah-instansi> --}}

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
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 350px;">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="text-center">Nama Mitra</th>
                    <th class="text-center">Alamat Mitra</th>
                    <th >Aksi</th>
                  </tr>
                  
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($mitra as $m)
                      <tr>
                        <td>{{  $no++ }}</td>
                        <td align="center">{{ $m -> nama }}</td>
                        <td align="center">{{ $m -> alamat }}</td>
                        <td>
                        <a href="/edit/{{$m -> id}}" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah">
                                <i class="fas fa-edit"></i> <b>Ubah</b>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <div class=" float-left">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                        <i class="fas fa-plus-circle"></i> <b>Tambah</b>
                  </button>
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Mitra Lokal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="/tambah-mitra" role="form" method="POST">
                             {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama Mitra</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mitra">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Mitra</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Mitra">
                                </div>
                                <div class="form-group">
                                    <label for="registrasi">Nomor Izin Registrasi</label>
                                    <input type="text" name="no_regis_izin" class="form-control" id="registrasi" placeholder="Nomor Registrasi">
                                </div>
                                <div class="form-group">
                                    <label>Nama Program</label>
                                  <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="">Pembiayaan</label>
                                  <input type="number" name="pembiayaan" class="form-control" id="biaya" placeholder="Besar nominal">
                                </div>
                                <div class="form-group">
                                  <label for="">Durasi</label>
                                  <div class="input-group">
                                    <input type="text" name="durasi_awal" class="form-control startdate datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate"/>
                                    <div class="input-group-append">
                                      <span class="input-group-text">s/d</span>
                                    </div>
                                    <input type="text" name="durasi_akhir" class="form-control enddate datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate" />
                                  </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal edit -->
                    {{-- @yield('modal_edit') --}}

                    <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Form Mitra Lokal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              @foreach ($mitra as $m)
                              <form action="/tambah-mitra/{{$m->id}}/update" role="form" method="POST">
                                      @csrf
                                      <input type="text" name="id" value="{{ $m -> id }}"> <br/>
                                      <div class="form-group">
                                          <label for="nama">Nama Mitra</label>
                                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mitra" value="{{ $m -> nama }}">
                                      </div>
                                      <div class="form-group">
                                          <label for="alamat">Alamat Mitra</label>
                                          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Mitra" value="{{ $m -> alamat }}" >
                                      </div>
                                      <div class="form-group">
                                          <label for="registrasi">Nomor Izin Registrasi</label>
                                          <input type="text" name="no_regis_izin" class="form-control" id="registrasi" placeholder="Nomor Registrasi" value="{{ $m -> no_regis_izin }}">
                                      </div>
                                      <div class="form-group">
                                      <label>Nama Program</label>
                                      <select class="form-control">
                                          <option>option 1</option>
                                          <option>option 2</option>
                                          <option>option 3</option>
                                          <option>option 4</option>
                                          <option>option 5</option>
                                      </select>
                                      </div>
                                      @foreach ($lokal as $item)
                                      <div class="form-group">
                                          <label for="">Pembiayaan</label>
                                          <input type="number" name="pembiayaan" class="form-control" id="biaya2" value="{{$item -> pembiayaan}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="">Durasi</label>
                                          <div class="input-group">
                                              <input type="text" name="durasi_awal" value="{{$item -> durasi_awal}}" class="form-control startdate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate2"/>
                                              <div class="input-group-append">
                                              <span class="input-group-text">s/d</span>
                                              </div>
                                              <input type="text" name="durasi_akhir" value="{{$item -> durasi_akhir}}" class="form-control enddate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate2" />
                                          </div>
                                      </div>
                                      @endforeach
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                          <button type="submit" class="btn btn-success">Simpan</button>
                                      </div>
                                  </form>
                              @endforeach
                          </div>
                      </div>
                      </div>
                  </div>
                    


              </div>
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



