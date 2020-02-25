<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Monev;

class monevController extends Controller
{
    public function index(){
        $monev = Monev::all();

        return view('mitra.ngo.monev.tambahmonev', ['monev' => $monev]);
    }

    public function store(Request $request){
        $jadwal = $request -> file('jadwal');
        $nama_jadwal = time().'_'.$jadwal -> getClientOriginalName();
        $lokasi = 'Monev_File';
        $jadwal -> move($lokasi, $nama_jadwal);

        $create -> Monev::create([
            'id' => $request -> id,
            'nama' => $request -> nama,
            'city_id' => $request -> city_id,
            'jadwal' =>  $nama_jadwal,
            'tanggapan' => $request -> tanggapan,
            'tgl_mulai' => $request -> tgl_mulai,
            'tgl_selesai' => $request -> tgl_selesai
        ]);

        return redirect('/tambah-monev');
    }
}
