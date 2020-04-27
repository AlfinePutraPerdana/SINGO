@extends('layouts.menufasker')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Verif Akun NGO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Verifikasi Akun NGO</a></li>
              <li class="breadcrumb-item active">Verifikasi registrasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Registrasi NGO</h3>
                    </div>
                    <div class="card-body">
                        <div class="form">
                        <form method="POST" action="/verif-akun/{{$user-> id}}/verifikasi">
                            {{ csrf_field() }}
                                <div class="row"><h3>Informasi Akun</h3></div>
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$user-> username}}" readonly>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                    <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user-> name}}" readonly>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user-> email}}" readonly>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No. Handphone') }}</label>

                                    <div class="col-md-6">
                                    <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{$user-> no_hp}}" readonly>

                                        @error('no_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row"><h3>Informasi Organisasi</h3></div>
                                <div class="form-group row">
                                    <label for="org_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Organisasi') }}</label>

                                    <div class="col-md-6">
                                    <input id="org_name" type="text" class="form-control @error('org_name') is-invalid @enderror" name="org_name" value="{{$instansis-> nama}}" readonly>

                                        @error('org_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="org_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Organisasi') }}</label>

                                    <div class="col-md-6">
                                        <input id="org_email" type="email" class="form-control @error('org_email') is-invalid @enderror" name="org_email" value="{{$ngo-> email}}" readonly>

                                        @error('org_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="negara" class="col-md-4 col-form-label text-md-right">{{ __('Negara Asal Organisasi') }}</label>

                                    <div class="col-md-6">
                                        <input id="negara" type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" value="{{$instansis-> negara}}" readonly>

                                        @error('negara')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_regis" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Registrasi Izin Prinsip') }}</label>

                                    <div class="col-md-6">
                                        <input id="no_regis" type="text" class="form-control @error('no_regis') is-invalid @enderror" name="no_regis" value="{{$instansis-> no_regis_izin}}" readonly>

                                        @error('no_regis')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country_director" class="col-md-4 col-form-label text-md-right">{{ __('Country Director/Representative') }}</label>

                                    <div class="col-md-6">
                                        <input id="country_director" type="text" class="form-control @error('country_director') is-invalid @enderror" name="country_director" value="{{$ngo-> country_director}}" readonly>

                                        @error('country_director')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="org_telp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon Kantor') }}</label>

                                    <div class="col-md-6">
                                        <input id="org_telp" type="text" class="form-control @error('org_telp') is-invalid @enderror" name="org_telp" value="{{$ngo-> no_telp}}" readonly>

                                        @error('org_telp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fax" class="col-md-4 col-form-label text-md-right">{{ __('Faximile') }}</label>

                                    <div class="col-md-6">
                                        <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{$ngo-> fax}}" readonly>

                                        @error('fax')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="bidang_kerja" class="col-md-4 col-form-label text-md-right">{{ __('Bidang Kerja') }}</label>

                                    <div class="col-md-6">
                                        <input id="bidang_kerja" type="text" class="form-control @error('bidang_kerja') is-invalid @enderror" name="bidang_kerja" value="{{$ngo-> bidang_kerja}}" readonly>

                                        @error('bidang_kerja')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_operasi" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Mulai Beroperasi di Indonesia') }}</label>

                                    <div class="col-md-6">
                                        <input id="tgl_operasi" type="date" class="form-control @error('tgl_operasi') is-invalid @enderror" name="tgl_operasi" value="{{$ngo-> mulai_beroperasi}}" readonly>

                                        @error('tgl_operasi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_msp" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Penandatanganan MSP Terakhir') }}</label>

                                    <div class="col-md-6">
                                        <input id="tgl_msp" type="date" class="form-control @error('tgl_msp') is-invalid @enderror" name="tgl_msp" value="{{$ngo-> tgl_ttd_msp}}" readonly>

                                        @error('tgl_msp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lokasi" class="col-md-4 col-form-label text-md-right">{{ __('Lokasi Kerjasama') }}</label>

                                    <div class="col-md-6">
                                        <input id="lokasis" type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasis" value="{{$ngo-> lokasi_kerja_sama}}" readonly>

                                        @error('lokasi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kota" class="col-md-4 col-form-label text-md-right">{{ __('Kota') }}</label>

                                    <div class="col-md-6">
                                        <input rows="5" id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{$instansis-> kota}}" readonly>

                                        @error('kota')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Kantor') }}</label>

                                    <div class="col-md-6">
                                        <textarea rows="5" id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$instansis-> alamat}}" readonly></textarea>

                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button class="btn btn-danger" name="revisi[]" type="submit"><i class="fas fa-sync-alt"></i> <b>Tolak</b></button>
                                        <button class="btn btn-success" name="setuju[]" type="submit"><i class="far fa-check-circle"></i> <b>Terima</b></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
@endsection
