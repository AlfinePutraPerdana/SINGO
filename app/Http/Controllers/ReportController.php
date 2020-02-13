<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Report;

use App\Laporan_keuangan;

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
            'lampiran'=>$request -> lampiran
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
            $lampiran = $index -> lampiran;
        }
        else{
            $lampiran = $request ->file('lampiran');
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
            'lampiran'=>$lampiran
        ]);

        return redirect('/ltk');
    }

    public function delete($id){
        $data = DB::table('Reports')->where('id', $id)->delete();

        return redirect('/ltk');
    }
}
?>