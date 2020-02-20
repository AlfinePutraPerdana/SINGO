<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Report;

class ReportController extends Controller
{
    public function index(){
        $lt = Report::all();

        return view('mitra.ngo.LTK.ltk', ['lt' => $lt]);
    }

    public function new(){
        return view('mitra.ngo.LTK.tambahltk');
    }

    public function store(Request $request){

        $lampiran = $request -> file('lampiran');
        $nama_lampiran = time().'_'.$lampiran->getClientOriginalName();
        $lokasi_lampiran = 'LTK_Lampiran';
        $lampiran -> move($lokasi_lampiran, $nama_lampiran);
        
        $create = Report::create([
            'judul'=>$request -> judul,
            'id_rkt'=>$request -> id_rkt,
            'pendahuluan'=>$request -> pendahuluan,
            'tujuan'=>$request -> tujuan,
            'sasaran'=>$request -> sasaran,
            'capaian'=>$request -> capaian,
            'peran_serta'=>$request -> peran_serta,
            'matauang_id'=>$request -> matauang_id,
            'nominal_biaya'=>$request -> nominal_biaya,
            'permasalahan'=>$request -> permasalahan,
            'upaya_pemecahan'=>$request -> upaya_pemecahan,
            'penutup'=>$request -> penutup,
            'lampiran'=>$nama_lampiran
        ]);

        return redirect('/ltk');
    }

    public function edit($id){
        $data = DB::table('Reports')->where('id', $id)->get();

        return view('mitra.ngo.LTK.editltk', ['data' => $data]);
    }

    public function update(Request $request){
        $index = Report::find($request -> id);

        if(empty($request -> file('lampiran'))){
            $nama_lampiran = $index -> lampiran;
        }
        else{
            $file_lama = $index -> lampiran;
            File::delete('LTK_Lampiran/'.$file_lama);
            $lampiran = $request ->file('lampiran');
            $nama_lampiran = time().'_'.$lampiran -> getClientOriginalName();
            $lokasi_lampiran = 'LTK_Lampiran';
            $lampiran -> move($lokasi_lampiran, $nama_lampiran);

        }

        $index->update([
            'judul'=>$request -> judul,
            'id_rkt'=>$request -> id_rkt,
            'pendahuluan'=>$request -> pendahuluan,
            'tujuan'=>$request -> tujuan,
            'sasaran'=>$request -> sasaran,
            'capaian'=>$request -> capaian,
            'peran_serta'=>$request -> peran_serta,
            'matauang_id'=>$request -> matauang_id,
            'nominal_biaya'=>$request -> nominal_biaya,
            'permasalahan'=>$request -> permasalahan,
            'upaya_pemecahan'=>$request -> upaya_pemecahan,
            'penutup'=>$request -> penutup,
            'lampiran'=>$nama_lampiran
        ]);

        return redirect('/ltk');
    }

    public function delete($id){
        $index = Report::find($id);
        $nama_file = $index -> lampiran;

        File::delete('LTK_Lampiran/'.$nama_file);
        $data = DB::table('Reports')->where('id', $id)->delete();

        return redirect('/ltk');
    }
}
?>