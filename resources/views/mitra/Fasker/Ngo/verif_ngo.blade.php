@extends('layouts.menufasker')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Verifikasi akun NGO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Verifikasi Akun NGO</li>
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
                        <h3 class="card-title">Daftar NGO Yang Melakukan Registrasi</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 450px;">
                        <form action="">
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Organisasi</th>
                                    <th>Asal Negara</th>
                                    <th>No. Registrasi</th>
                                    <th>Aksi</th>
                                    <th>Pilih</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>World Wildlife Foundation</td>
                                    <td>Amerika Serikat</td>
                                    <td>202100101</td>
                                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                                       <i class="far fa-eye"></i><b> Pratinjau</b>
                                    </td>
                                        <div class="modal fade" id="pratinjau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Pengajuan Tamu Asing</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post" class="contactForm">
                                                            <div class="form-group">
                                                                <h5>Nama Organisasi</h5>
                                                                <p>World Wildlife Foundation</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Negara Asal</h5>
                                                                <p>Amerika Serikat</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Nomor Registrasi Izin Prinsip</h5>
                                                                <p>202100101</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Country Director / Representative</h5>
                                                                <p>text here</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Alamat</h5>
                                                                <p>Jl.Merdeka No.45, Kecamatan Kemayoran, Jakarta Pusat</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Nomor Telepon</h5>
                                                                <p>089210364538</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Faximile</h5>
                                                                <p>+62 21-7829462</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Email</h5>
                                                                <p>service@wwf.or.id</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Website</h5>
                                                                <p>Worldwildlife.org</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Bidang Kerja</h5>
                                                                <p>Pelestarian Lingkungan</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Tanggal Mulai Beroperasi di Indonesia</h5>
                                                                <p>31-01-1962</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Tanggal Penandatanganan MSP Terakhir</h5>
                                                                <p>31-01-2020</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Lokasi Kerja Sama</h5>
                                                                <p>Ujung Kulon, Banten</p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <td>
                                        <div class="icheck-success d-inline">
                                            <input type="checkbox" id="pilih1">
                                            <label for="pilih1">pilih</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>World Wildlife Foundation</td>
                                    <td>Amerika Serikat</td>
                                    <td>202100101</td>
                                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                                       <i class="far fa-eye"></i><b> Pratinjau</b></td>
                                    <td>
                                    <div class="icheck-success d-inline">
                                        <input type="checkbox" id="pilih2">
                                        <label for="pilih2"></label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>World Wildlife Foundation</td>
                                    <td>Amerika Serikat</td>
                                    <td>202100101</td>
                                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                                       <i class="far fa-eye"></i><b> Pratinjau</b></a></td>
                                    <td>
                                    <div class="icheck-success d-inline">
                                        <input type="checkbox" id="pilih3">
                                        <label for="pilih3"></label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>World Wildlife Foundation</td>
                                    <td>Amerika Serikat</td>
                                    <td>202100101</td>
                                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                                       <i class="far fa-eye"></i><b> Pratinjau</b></a></td>
                                    <td>
                                    <div class="icheck-success d-inline">
                                        <input type="checkbox" id="pilih4">
                                        <label for="pilih4"></label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>World Wildlife Foundation</td>
                                    <td>Amerika Serikat</td>
                                    <td>202100101</td>
                                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pratinjau" data-toggle="tooltip" title="Lihat form pengajuan">
                                       <i class="far fa-eye"></i><b> Pratinjau</b></a></td>
                                    <td>
                                    <div class="icheck-success d-inline">
                                        <input type="checkbox" id="pilih5">
                                        <label for="pilih5"></label>
                                    </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                        <div class="card-footer clearfix">
                            <div class="col-md-4 float-left">
                                <a href="/master-ngo" role="button" class="btn btn-block btn-primary"><i class="far fa-check-square"></i>   Verifikasi</a>
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
