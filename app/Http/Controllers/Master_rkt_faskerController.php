<?php

namespace App\Http\Controllers;

use App\Rkt;

use Illuminate\Http\Request;

class Master_rkt_faskerController extends Controller
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
        
             

        return view('mitra.Fasker.Rkt.master_rkt',['rencanas' => $rencanas]);
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

        return view('mitra.Fasker.Rkt.master_rkt_lihat',['rencana'=>$rencana]);
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
    public function update(Request $request, $id)
    {
        //
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
