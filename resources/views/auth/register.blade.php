@extends('layouts.app')

@section('content')
<section id="intro-register" class="clearfix">
    <div class="container">
        <h1>Registrasi<br /><span>NGO</span></h1>
    </div>
</section>
<main>
    <section id="register">
        <div class="container">
            <div class="form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row"><h3>Informasi Akun</h3></div>
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

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
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required autocomplete="name">

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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No. Handphone') }}</label>

                        <div class="col-md-6">
                        <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{old('no_hp')}}" required autocomplete="no_hp">

                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                <!--
                    <div class="row"><h3>Informasi Organisasi</h3></div>
                    <div class="form-group row">
                        <label for="org_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Organisasi') }}</label>

                        <div class="col-md-6">
                        <input id="org_name" type="text" class="form-control @error('org_name') is-invalid @enderror" name="org_name" value="{{old('org_name')}}" required autocomplete="org_name">

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
                            <input id="org_email" type="email" class="form-control @error('org_email') is-invalid @enderror" name="org_email" value="{{ old('org_email') }}" required autocomplete="org_email">

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
                            <input id="negara" type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" value="{{ old('negara') }}" required autocomplete="negara">

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
                            <input id="no_regis" type="text" class="form-control @error('no_regis') is-invalid @enderror" name="no_regis" value="{{ old('no_regis') }}" required autocomplete="no_regis">

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
                            <input id="country_director" type="text" class="form-control @error('country_director') is-invalid @enderror" name="country_director" value="{{ old('country_director') }}" required autocomplete="no_regis">

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
                            <input id="org_telp" type="text" class="form-control @error('org_telp') is-invalid @enderror" name="org_telp" value="{{ old('org_telp') }}" required autocomplete="org_telp">

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
                            <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') }}" required autocomplete="fax">

                            @error('fax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="web" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                        <div class="col-md-6">
                            <input id="web" type="text" class="form-control @error('web') is-invalid @enderror" name="web" value="{{ old('web') }}" required autocomplete="web">

                            @error('web')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bidang_kerja" class="col-md-4 col-form-label text-md-right">{{ __('Bidang Kerja') }}</label>

                        <div class="col-md-6">
                            <input id="bidang_kerja" type="text" class="form-control @error('bidang_kerja') is-invalid @enderror" name="bidang_kerja" value="{{ old('bidang_kerja') }}" required autocomplete="bidang_kerja">

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
                            <input id="tgl_operasi" type="date" class="form-control @error('tgl_operasi') is-invalid @enderror" name="tgl_operasi" value="{{ old('tgl_operasi') }}" required autocomplete="tgl_operasi">

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
                            <input id="tgl_msp" type="date" class="form-control @error('tgl_msp') is-invalid @enderror" name="tgl_msp" value="{{ old('tgl_msp') }}" required autocomplete="tgl_msp">

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
                            <input id="lokasi" type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ old('lokasi') }}" required autocomplete="lokasi">

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
                            <input rows="5" id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ old('kota') }}" required autocomplete="kota">

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
                            <textarea rows="5" id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat"></textarea>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                -->
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</main>
@endsection
