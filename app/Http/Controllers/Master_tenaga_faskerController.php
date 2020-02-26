<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Master_tenaga_asing;

use App\History_ta;

use App\Instansi;

class Master_tenaga_faskerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {

            $tenagas = Master_tenaga_asing::where('nama','LIKE','%'.$request->search.'%')
                                             ->where('status','3')
                                             ->latest('updated_at')
                                             ->paginate(5);

        } else {
           
            $tenagas = Master_tenaga_asing::where('status','3')->latest('updated_at')->paginate(5);
            
        }

        return view('mitra.Fasker.Tenaga_asing.master_tenaga_asing',['tenagas' => $tenagas]);
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
    public function history(Request $request ,$id)
    {
        if ($request->has('search')) {
            
            $historis = History_ta::where('nama','Like','%'.$request->search.'%')
                                    ->where('id_tenaga',$id)
                                    ->latest('updated_at')
                                    ->paginate(5); 

        } else {
            
            $historis = History_ta::where('id_tenaga',$id)->latest('updated_at')->paginate(5);
        }

        

        return view('mitra.Fasker.Tenaga_asing.history_tenaga',['historis' => $historis]); 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenaga = Master_tenaga_asing::find($id);

        $instansis = Instansi::all();

        return view('mitra.Fasker.Tenaga_asing.edit_master_tenaga',['tenaga' => $tenaga, 'instansis' => $instansis]);
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
        $tenaga = Master_tenaga_asing::find($id);

        $tenaga->update([
            'status_keaktifan' => $request -> status_keaktifan
        ]);

        return redirect('/master-tenaga-asing')->with('sukses','Data Berhasil di Update');
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
