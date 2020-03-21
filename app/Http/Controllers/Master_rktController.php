<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rkt;

class Master_rktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rencanas = Rkt::where('status','3')->latest()->paginate(5);

        return view('mitra.ngo.RKT.draftrkt',['rencanas' => $rencanas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rencana = Rkt::find($id);

        return view('mitra.ngo.RKT.lihatdata',['rencana'=>$rencana]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rencana = Rkt::find($id);

        if (empty($request->file('lampiran'))) {
            
            $nama_lampiran = $rencana->lampiran;

        } else {
            
            $lampiran = $request->file('lampiran');
            $nama_lampiran = time().'_'.$lampiran->getClientOriginalName();
            $lokasi_lampiran = 'lampiran RKT';
            $lampiran->move($lokasi_lampiran,$nama_lampiran);

        }

        if (empty($request->file('bap'))) {
            
            $nama_bap = $rencana->bap;

        } else {
            
            $bap = $request -> file('bap');
            $bap_lama = $rencana->bap;
            File::delete('lampiran BAP/'.$bap_lama);
            $nama_bap = time().'_'.$bap->getClientOriginalName();
            $lokasi_bap = 'lampiran BAP';
            $bap -> move($lokasi_bap, $nama_bap);
        }

        $rencana->update([
            'judul' => $request->judul,
            'pendahuluan' => $request->pendahuluan,
            'tujuan' => $request->tujuan,
            'kelompok_sasaran' => $request->kelompok_sasaran,
            'hasil_yang_diharapkan' => $request->hasil_yang_diharapkan,
            'tenaga_lokal' => $request->tenaga_lokal,
            'jumlah_ta' => $request->jumlah_ta,
            'peran_ketiga' => $request->peran_ketiga,
            'lokasi' => $request->lokasi,
            'nominal_biaya' => $request->nominal_biaya,
            'jadwal_awal' => $request->jadwal_awal,
            'jadwal_akhir' => $request->jadwal_akhir,
            'penutup' => $request->penutup,
            'lampiran' =>$nama_lampiran,
            'bap' => $nama_bap,
            'status' => 1
        ]);

        return redirect('/list-rkt')->with('sukses','Data Berhasil di Kirim');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
