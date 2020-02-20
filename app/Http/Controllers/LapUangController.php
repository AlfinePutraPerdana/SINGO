<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Laporan_keuangan;

class LapUangController extends Controller
{
    public function index(){
        $lk = Laporan_keuangan::all();

        return view('mitra.ngo.LTK.lk', ['lk' => $lk]);
    }

    public function new(){
        return view('mitra.ngo.LTK.tambahlk');
    }

    public function store(Request $request){
        $file = $request -> file('rincian');
        $nama_file = time().'_'.$file->getClientOriginalName();
        $lokasi_file = 'LK_file';
        $file -> move($lokasi_file, $nama_file);

        $create = Laporan_keuangan::create([
            'nama' => $request -> nama,
            'id_instansi' => $request -> id_instansi,
            'id_rik' => $request -> id_rik,
            'id_rkt' => $request -> id_rkt,
            'nominal_lokal' => $request -> nominal_lokal,
            'nominal_asing' => $request -> nominal_asing,
            'mata_uang' => $request -> mata_uang,
            'rincian' => $request -> rincian
        ]);

        return redirect('/lk');
    }
}
