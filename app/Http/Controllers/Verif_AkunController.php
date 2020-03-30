<?php

namespace App\Http\Controllers;

use App\instansi;
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


        return view('mitra.Fasker.ngo.verif_ngo',['akun' => $akun]);

    }

}
