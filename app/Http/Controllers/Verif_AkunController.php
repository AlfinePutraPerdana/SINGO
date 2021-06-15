<?php

namespace App\Http\Controllers;

use App\instansi;
use App\Ngo;
use Illuminate\Http\Request;
use App\User;

class Verif_AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if($request->has('search'))
        {
            $akun = User::where('name','LIKE','%'.$request->search.'%')
                                            ->wherein('status',[0])
                                            ->latest('updated_at')
                                            ->paginate(5);

             $akun->appends($request->only('search'));


        }else{

            $akun = User::wherein('status',[0])->latest('updated_at')->paginate(5);


        }
        $instansiid = user::all()->get('id_instansi');
        $instansi = instansi::find($instansiid);


        return view('mitra.Fasker.ngo.verif_ngo',['akun' => $akun, 'instansi' => $instansi]);

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
            $revisi = User::find($id);
            $revisi->update([

                'status'=> 3
            ]);
        }

        if ($request->setuju) {
            $setuju = User::find($id);
            $setuju->update([

                'status'=> 1
            ]);
        }


        return redirect('/verif-akun')->with('sukses','akun Berhasil di Verifikasi');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function show($id){
    $user=User::find($id);
    $instansiid=$user-> id_instansi;
    $instansis=instansi::find($instansiid);
    $ngo=Ngo::find($instansiid);
    return view('mitra.Fasker.Ngo.pratinjau_ngo',['user'=>$user,'instansis'=>$instansis,'ngo'=>$ngo]);
}



}

