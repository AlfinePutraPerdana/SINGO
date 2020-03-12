<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rkt;

class Verif_rktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rencanas = Rkt::where('status','1')->latest()->paginate(5);

        return view('mitra.satker.RKT.rkt',['rencanas' => $rencanas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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

        return view('mitra.satker.RKT.verifrktdraft',['rencana' => $rencana]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verif(Request $request, $id)
    {
        if ($request->revisi) {
            $rencana = Rkt::find($id);
            $rencana->update([
                'catatan'=> $request->catatan,
                'status' => 2
            ]);
        }
        
        if ($request->setuju) {
            $rencana = Rkt::find($id);
            $rencana->update([
                'status' => 3
            ]);
        }

        return redirect('/satker/rkt')->with('sukses','Data Berhasil di Verifikasi');
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