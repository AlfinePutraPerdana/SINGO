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
    public function index(Request $request)
    {
        //
        if($request->has('search')){
            $mitra = Instansi::where('nama','LIKE','%' .$request->search. '%')->paginate(5);
        }else{

            $mitra = Instansi::paginate(5);
        }

        // $lokal = Mitra_lokal::all();
        // $mitra = DB::table('instansis')->get();

            return view('mitra.ngo.mitra.tambahmitra', ['mitra' => $mitra]);
        
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

       $instansi = Instansi::create([
            'nama' => $request -> nama,
            'alamat' => $request -> alamat,
            'no_regis_izin' => $request -> no_regis_izin
        ]);

        $id_instansi = $instansi -> id;



       $mitra_lokal = Mitra_lokal::create([
           'instansi_id' => $id_instansi,
           'pembiayaan' => $request -> pembiayaan,
           'durasi_awal' => $request -> durasi_awal,
           'durasi_akhir' => $request -> durasi_akhir
       ]);

       return redirect('/tambah-mitra');

        // DB::table('instansis')->insert([
        //     'nama' => $request -> nama,
        //     'alamat' => $request -> alamat,
        //     'no_regis_izin' => $request -> no_regis_izin
        // ]);

        // DB::table('mitra_lokal')->insert([
        //     'id' => $request -> instansi_id,
        //     'pembiayaan' => $request -> pembiayaan,
        //     'durasi_awal' => $request -> durasi_awal,
        //     'durasi_akhir' => $request -> durasi_akhir
             
        // ]);

        
        
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

        $mitra = Instansi::join('mitra_lokals as mitra', 'mitra.instansi_id','=','instansis.id')
                            ->select('mitra.id as mitra_id','instansis.id as instansi_id','nama','alamat','no_regis_izin','mitra.pembiayaan','mitra.durasi_awal','mitra.durasi_akhir')
                            ->where('instansis.id','=',$id)
                            ->first();

        // $lokal = Mitra_lokal::find($id);

        // $mitra = DB::table('instansis')->where('id', $id)->get();
        
        // $lokal = DB::table('mitra_lokals')->where('id', $id)->get();

        return view('mitra.ngo.mitra.edit', ['mitra' => $mitra]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        // $mitra = Instansi::find($id);

        // $mitra = Instansi::join('mitra_lokals', 'mitra_lokals.instansi_id','=','instansis.id')
        //                     ->where('instansis.id','=', $id)
        //                     ->update([
        //                         'nama' => $request -> nama,
        //                         'alamat' => $request -> alamat,
        //                         'no_regis_izin' => $request -> no_regis_izin,
        //                         'pembiayaan' => $request -> pembiayaan,
        //                         'durasi_awal' => $request -> durasi_awal,
        //                         'durasi_akhir' => $request -> durasi_akhir

        //                     ]);

                $instansi = Instansi::where('id',$request-> id)
                            ->update([
                                'nama' => $request -> nama,
                                'alamat' => $request -> alamat,
                                'no_regis_izin' => $request -> no_regis_izin
                            ]);

                $mitra_lokal = Mitra_lokal::where('id',$request -> id)
                                ->update([
                                    'pembiayaan' => $request -> pembiayaan,
                                    'durasi_awal' => $request -> durasi_awal,
                                    'durasi_akhir' => $request -> durasi_akhir
                                ]);

        // $lokal = Mitra_lokal::where('mitra_id', $request -> id)
        //                     ->update([
        //                         'pembiayaan' => $request -> pembiayaan,
        //                         'durasi_awal' => $request -> durasi_awal,
        //                         'durasi_akhir'  => $request-> durasi_akhir
        //                     ]);

        

        // $mitra->update([
        //     'nama' => $request -> nama,
        //     'alamat' => $request -> alamat,
        //     'no_regis_izin' => $request -> no_regis_izin
            
        // ]);

        // $lokal = Mitra_lokal::find($id);

        // $mitra->update([
        //     'nama' => $request -> nama,
        //     'alamat' => $request -> alamat,
        //     'no_regis_izin' => $request -> no_regis_izin
        // ]);
        
        // $mitra->update([
        //     'pembiayaan' => $request -> pembiayaan,
        //     'durasi_awal' => $request -> durasi_awal,
        //     'durasi_akhir' => $request -> durasi_akhir
        // ]);

        // $mitra->save($request->all());
        
        // $lokal->save($request->all());

        // $mitra = DB::table('instansis')->where('id', $request->id)->update([
        //     'nama' => $request -> nama,
        //     'alamat' => $request -> alamat,
        //     'no_regis_izin' => $request -> no_regis_izin
        // ]);

        // $lokal = DB::table('mitra_lokals')->where('id',$request->id)->update([
        //     'pembiayaan' => $request -> pembiayaan,
        //     'durasi_awal' => $request -> durasi_awal,
        //     'durasi_akhir' => $request -> durasi_akhir
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
