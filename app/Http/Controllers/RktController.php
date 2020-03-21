<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rkt;

use Illuminate\Support\Facades\File;

class RktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->has('search')) {
            
            $rencanas = Rkt::where('judul','LIKE'.'%'.$request->search.'%')
                            ->wherein('status',[0,1,2])
                            ->latest('updated_at')
                            ->paginate(5);

            $rencanas->appends($request->only('search'));

        } else {
            
            $rencanas = Rkt::wherein('status',[0,1,2])->latest()->paginate(5);

        }
        
        return view('mitra.ngo.RKT.rkt',['rencanas'=>$rencanas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.ngo.RKT.tambahrkt');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $pesan = [

        'required' => ':attribute Wajib di Isi',
        'lampiran.mimes' => 'Lampiran File Harus File PDF'

       ];
       
        $this->validate($request,[

        'judul' => 'required',
        'pendahuluan' => 'required',
        'tujuan' => 'required',
        'kelompok_sasaran' => 'required',
        'hasil_yang_diharapkan' => 'required',
        'tenaga_lokal' => 'required',
        'tenaga_asing' => 'required',
        'jumlah_ta' => 'required',
        'peran_ketiga' => 'required',
        'lokasi' => 'required',
        'nominal_biaya' => 'required',
        'jadwal_awal' => 'required',
        'jadwal_akhir' => 'required',
        'penutup' => 'required',
        'lampiran' => 'required|mimes:pdf|max:3000'

       ],$pesan);
       
       
        $lampiran = $request->file('lampiran');
        $nama_lampiran = $lampiran->getClientOriginalName();
        $namafile_lampiran = str_random(30).".".$lampiran->getClientOriginalExtension();
        $lampiran->storeAs('lampiran RKT',$namafile_lampiran);
        $filename_lampiran = $namafile_lampiran;

        if (($request->file('bap'))) {
            
            $bap = $request->file('bap');
            $nama_bap = $bap->getClientOriginalName();
            $namafile_bap = str_random(30).".".$bap->getClientOriginalExtension();
            $bap->storeAs('lampiran BAP', $namafile_bap);
            $filename_bap = $namafile_bap;

        } else {
            
            $nama_bap = null;
            $filename_bap = null;

        }
        
        $rencana = Rkt::create([
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
            'jadwal_awal' => $request->jadwal_awal,
            'jadwal_akhir' => $request->jadwal_akhir,
            'penutup' => $request->penutup,
            'lampiran' =>$nama_lampiran,
            'filename_lampiran' => $filename_lampiran,
            'bap' => $nama_bap,
            'filename_bap' => $filename_bap,
            'status' => 0
        ]);

        return redirect('/rkt')->with('sukses','Data Berhasil di Tambah');
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

        return view('mitra.ngo.RKT.revisirktdraft',['rencana'=>$rencana]);
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
            File::delete('storage/lampiran RKT/'.$lampiran_lama);
            $nama_lampiran = $lampiran->getClientOriginalName();
            $namafile_lampiran = str_random(30).".".$lampiran->getClientOriginalExtension();
            $lampiran->storeAs('lampiran RKT',$namafile_lampiran);
            $filename_lampiran = $namafile_lampiran;

            
        }
        
                
        if(($request->file('bap'))){

            $bap = $request->file('bap');
            $nama_bap = $bap->getClientOriginalName();
            $namafile_bap = str_random(30).".".$bap->getClientOriginalExtension();
            $bap->storeAs('lampiran BAP', $namafile_bap);
            $filename_bap = $namafile_bap;
            
        }elseif (empty($request->file('bap'))){

            $nama_bap = $rencana ->bap;
            $filename_bap = $rencana->filename_bap;

        }else {
            
                $bap = $request -> file('bap');
                $bap_lama = $rencana->filename_bap;
                File::delete('storage/lampiran BAP/'.$bap_lama);
                $namafile_bap = str_random(30).".".$bap->getClientOriginalExtension();
                $bap->storeAs('lampiran BAP', $namafile_bap);
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
            'jadwal_awal' => $request->jadwal_awal,
            'jadwal_akhir' => $request->jadwal_akhir,
            'penutup' => $request->penutup,
            'lampiran' =>$nama_lampiran,
            'filename_lampiran' => $filename_lampiran,
            'bap' => $nama_bap,
            'filename_bap' => $filename_bap,
            'catatan' => $request->catatan
        ]);

        return redirect('/rkt')->with('sukses','Data Berhasil di Update');
    }

    public function send(Request $request)
    {

        if ($request->kirim != null) {
            
            foreach($request->kirim as $kirim){

                $rencana = Rkt::find($kirim);
                $rencana->update([
                    'status' => 1,
                ]);
            }
        } else {
            
            return redirect('/rkt');
        }

        return redirect('/rkt')->with('sukses','Data Berhasil di Kirim');
        
    }
    
}
