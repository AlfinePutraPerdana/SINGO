<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rkt;

use App\Mata_uang;

use App\Master_program;

use Illuminate\Support\Facades\File;

class Master_rktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            
            $rencanas = Rkt::where('judul','LIKE','%'.$request->search.'%')
                            ->where('status','3')
                            ->latest('updated_at')
                            ->paginate(5);

            $rencanas->appends($request->only('search'));

        } else {

            $rencanas = Rkt::where('status','3')->latest()->paginate(5);
        }
        
             

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
        $rencana = Rkt::find($id);

        $programs = Master_program::all();

        $uangs = Mata_uang::all();

        return view('mitra.ngo.RKT.lihatdata',['rencana'=>$rencana,'programs'=>$programs,'uangs'=>$uangs]);
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

        $programs = Master_program::all();

        $uangs = Mata_uang::all();

        return view('mitra.ngo.RKT.editdata',['rencana'=>$rencana,'programs'=>$programs,'uangs'=>$uangs]);
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
            $filename_lampiran = $rencana->filename_lampiran;

        } else {
            
            $lampiran = $request->file('lampiran');
            $lampiran_lama = $rencana->filename_lampiran;
            File::delete('storage/Lampiran RKT/File pendukung/'.$lampiran_lama);
            $nama_lampiran = $lampiran->getClientOriginalName();
            $namafile_lampiran = str_random(30).".".$lampiran->getClientOriginalExtension();
            $lampiran->storeAs('Lampiran RKT/File pendukung',$namafile_lampiran);
            $filename_lampiran = $namafile_lampiran;

            
        }

        

        if (empty($request->file('bap'))) {
            
            $nama_bap = $rencana ->bap;
            $filename_bap = $rencana->filename_bap;

        } else {
            
            $bap = $request->file('bap');
            $bap_lama = $rencana->filename_bap;
            File::delete('storage/Lampiran RKT/Lampiran BAP/'.$bap_lama);
            $nama_bap = $bap->getClientOriginalName();
            $namafile_bap = str_random(30).".".$bap->getClientOriginalExtension();
            $bap->storeAs('Lampiran RKT/Lampiran BAP', $namafile_bap);
            $filename_bap = $namafile_bap;
        }

       

        $rencana->update([
            'judul' => $request->judul,
            'pendahuluan' => $request->pendahuluan,
            'tujuan' => $request->tujuan,
            'kelompok_sasaran' => $request->kelompok_sasaran,
            'hasil_yang_diharapkan' => $request->hasil_yang_diharapkan,
            'tenaga_lokal' => $request->tenaga_lokal,
            'tenaga_asing' => $request->tenaga_asing,
            'jumlah_ta' => $request->jumlah_ta,
            'peran_ketiga' => $request->peran_ketiga,
            'lokasi' => $request->lokasi,
            'nominal_biaya' => $request->nominal_biaya,
            'mata_uang_id' =>$request->mata_uang_id,
            'jadwal_awal' => $request->jadwal_awal,
            'jadwal_akhir' => $request->jadwal_akhir,
            'penutup' => $request->penutup,
            'lampiran' =>$nama_lampiran,
            'filename_lampiran' => $filename_lampiran,
            'bap' => $nama_bap,
            'filename_bap' => $filename_bap,
            'id_program'=> $request->id_program,
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
