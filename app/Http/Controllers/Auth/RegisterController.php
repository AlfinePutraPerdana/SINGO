<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Kategori_instansi;
use App\Instansi;
use App\Ngo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_hp' => ['required', 'string','min:10', 'max:12'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * @return \App\instansi
     * @return \App\Ngo
     */
    protected function create(array $data)
    {
        $lokal = Kategori_instansi::where('id',1)->first();

        $instansi= instansi::create([
            'nama' => $data['org_name'],
            'negara'=>$data['negara'],
            'kota' => $data['kota'],
            'alamat' => $data['alamat'],
            'no_regis_izin' => $data['no_regis'],
            'id_kategori' => $lokal->id,
        ]);


        $id_instansi = $instansi -> id;

        $ngo= Ngo::create([
            'id_instansi' => $id_instansi,
            'no_telp'=>$data['org_telp'],
            'fax' => $data['fax'],
            'email' => $data['org_email'],
            'website' => $data['no_regis'],
            'bidang_kerja' => $data['bidang_kerja'],
            'mulai_beroperasi' => $data['tgl_operasi'],
            'tgl_ttd_msp' => $data['tgl_msp'],
            'lokasi_kerja_sama' => $data['lokasi'],
            'country_director' => $data['country_director']
        ]);


        return User::create([
            'id_instansi' => $id_instansi,
            'name' => $data['name'],
            'username'=>$data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'no_hp' => $data['no_hp'],
            'status' => '0',
            'level' =>'1'
        ]);
        return $instansi;
        return $ngo;

    }
}
