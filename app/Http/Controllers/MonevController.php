<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Monev;

class MonevController extends Controller
{
    public function index(){
        $monev = Monev::all();

        return view('mitra.ngo.monev.lihatmonev', ['monev' => $monev]);
    }

    public function new(){
        return view('mitra.ngo.monev.tambahmonev');
    }

    public function store(Request $request){

        $jadwal = $request -> file('jadwal');
        $nama_jadwal = time().'_'.$jadwal -> getClientOriginalName();
        $lokasi = 'Monev_File';
        $jadwal -> move($lokasi, $nama_jadwal);

        $create = Monev::create([
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

    public function edit($id){
        $data = DB::table('monevs')->where('id', $id)->get();

        return view('mitra.ngo.monev.editmonev', ['data' => $data]);
    }

    public function update(Request $request){
        $index = Monev::find($request -> id);

        if(empty($request -> file('jadwal'))){
            $nama_jadwal = $index -> jadwal;
        }
        else{
            $file_lama = $index -> jadwal;
            File::delete('Monev_file/'.$file_lama);
            $jadwal = $request -> file('jadwal');
            $nama_jadwal = time().'_'.$jadwal->getClientOriginalName();
            $lokasi = 'Monev_file';
            $jadwal -> move($lokasi, $nama_jadwal);
        }

        $index -> update([
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

    public function delete($id){
        $index = Monev::find($id);
        $nama_file = $index -> jadwal;

        File::delete('Monev_file/'.$nama_file);
        $data = DB::table('Monevs')->where('id', $id)->delete();

        return redirect('/tambah-monev');
    }
}
