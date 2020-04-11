<?php

namespace App\Http\Controllers;

use App\Master_program;
use App\Rik_kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RikController extends Controller
{
    public function index(Request $request)
    {   $id_instansi = Auth::user()->id_instansi;

        if ($request->has('search')) {

            $program = Master_program::where('nama','LIKE'.'%'.$request->search.'%')

                            ->latest('updated_at')
                            ->paginate(5);

            $program->appends($request->only('search'));


        } else {

            $program = Master_program::wherein('id_instansi',[$id_instansi])->latest()->paginate(5);

        }
        $id_pro = Master_program::all()->get('id');
        $kegiatan = Rik_kegiatan::where('id_program',[$id_pro]);

        return view('mitra.ngo.RIK.draftrik',['program' => $program, 'kegiatan'=>$kegiatan]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Master_program
     */
    public function create(Request $request){
        $id_instansi = Auth::user()->id_instansi;
        $program = Master_program::create([
            'id_instansi'=>$id_instansi,
            'nama'=>$request -> nama,
        ]);

        return redirect('/draft-rik');
    }
}
