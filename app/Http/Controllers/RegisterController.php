<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Ngo;
use App\Kategori_instansi;
use App\Instansi;

class RegisterController extends Controller
{
    public function Showregisterform()
    {
        $ngo = Kategori_instansi::where('id',1)->first();

        

        return view('dashboard.register');
    }

    public function Register(Request $request)
    {
        
        $ngo = Kategori_instansi::where('id',1)->first();

        $mitra = Kategori_instansi::where('id',2)->first();

        $instansi=Instansi::create([
            'nama' => $request -> name,
            'negara' => $request -> negara,
            'kota'=> 'Bogor',
            'alamat' => $request -> address,
            'no_regis_izin' => $request -> nomor,
            'id_kategori' => $ngo
            
        ]);

       

        $id_instansi = $instansi -> id;

        $ngo=Ngo::create([
            'id_instansi' => $id_instansi,
            'no_telp' => $request -> telp,
            'fax' => $request -> fax,
            'email' => $request -> email,
            'website' => $request -> web,
            'bidang_kerja' => $request -> bidang,
            'mulai_beroperasi' => $request -> tgloperasi,
            'tgl_ttd_msp' => $request -> tglmsp,
            'lokasi_kerja_sama' => $request -> lokasi,
            'country_director' => $request -> director

        ]);

        $user=User::create([
            'id_instansi' => $id_instansi,
            'name' => $request -> name_user,
            'email' => $request -> email_user,
            'password' => $request -> password,
            'username' => $request -> username,
            'no_hp' =>$request -> telp_user,
            'status' =>0

        ]);
        return redirect('/register')->with('Sukses','Akun anda segera di proses');

    }

    
}
