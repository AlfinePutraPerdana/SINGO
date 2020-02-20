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
            'rincian' => $nama_file
        ]);

        return redirect('/lk');
    }

    public function edit($id){
        $data = DB::table('Laporan_keuangans')->where('id', $id)->get();

        return view('mitra.ngo.LTK.editlk', ['data' => $data]);
    }

    public function update(Request $request){
        $index = Laporan_keuangan::find($request -> id);
        if(empty($request -> file('rincian'))){
            $nama_file = $index -> rincian;
        }
        else{
            $file_lama = $index -> rincian;
            File::delete('LK_file/'.$file_lama);
            $file = $request -> file('rincian');
            $nama_file = time().'_'.$file -> getClientOriginalName();
            $lokasi_file = 'LK_file';
            $file -> move($lokasi_file, $nama_file);
        }

        $index->update([
            'nama' => $request -> nama,
            'id_instansi' => $request -> id_instansi,
            'id_rik' => $request -> id_rik,
            'id_rkt' => $request -> id_rkt,
            'nominal_lokal' => $request -> nominal_lokal,
            'nominal_asing' => $request -> nominal_asing,
            'mata_uang' => $request -> mata_uang,
            'rincian' => $nama_file
        ]);
        
        return redirect('/lk');
    }

    public function delete($id){
        $data = Laporan_keuangan::find($id);
        $nama_file = $data -> rincian;

        File::delete('LK_file/'.$nama_file);
        $data = DB::table('Laporan_keuangans')->where('id', $id)->delete();

        return redirect('/lk');
    }
}
