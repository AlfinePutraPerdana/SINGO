<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Master_tenaga_asing;

use App\Instansi;

class Verif_tenagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenagas = Master_tenaga_asing::where('status','1')->latest()->paginate(5);

        $instansis = Instansi::all();

        return view('mitra.Fasker.Tenaga_asing.verif_tenaga_asing',['tenagas' => $tenagas,'instansis'=> $instansis]);
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
        $tenaga = Master_tenaga_asing::find($id);

        $instansis = Instansi::all();

        return view('mitra.Fasker.Tenaga_asing.formverif',['tenaga' => $tenaga,'instansis'=>$instansis]);

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
    public function send(Request $request, $id)
    {
        
        
        if ($request->revisi) {
            $revisi = Master_tenaga_asing::find($id);
            $revisi->update([
                'catatan'=>$request->catatan,
                'status'=> 2
            ]);
        }
        
        if ($request->setuju) {
            $setuju = Master_tenaga_asing::find($id);
            $setuju->update([
                'status'=> 3
            ]);
        }
        
        
        

        return redirect('/verif-tenaga-asing')->with('sukses','Data Berhasil di Verifikasi');
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
