<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Instansi;

use App\Mitra_lokal;



class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mitra = Instansi::all();

        $lokal = Mitra_lokal::all();
        // $mitra = DB::table('instansis')->get();

            return view('mitra.ngo.mitra.tambahmitra', ['mitra' => $mitra,'lokal' => $lokal]);
        
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

        Instansi::create($request->all());

        Mitra_lokal::create($request->all());
        // DB::table('instansis')->insert([
        //     'nama' => $request -> nama,
        //     'alamat' => $request -> alamat,
        //     'no_regis_izin' => $request -> no_regis_izin
        // ]);

        return redirect('/tambah-mitra');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $mitra = Instansi::find($id);

        $lokal = Mitra_lokal::find($id);

        // $mitra = DB::table('instansis')->where('id', $id)->get();

        return view('mitra.ngo.mitra.edit', ['mitra' => $mitra,'lokal' => $lokal]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        $mitra = Instansi::find($id);

        $lokal = Mitra_lokal::find($id);

        $mitra->update($request->all());
        
        $lokal->update($request->all());

        $mitra->save($request->all());
        
        $lokal->save($request->all());
        // $mitra = DB::table('instansis')->where('id', $request->id)->update([
        //     'nama' => $request -> nama,
        //     'alamat' => $request -> alamat,
        //     'no_regis_izin' => $request -> no_regis_izin
        // ]);

        return redirect('/tambah-mitra');

        
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
