<?php

namespace App\Http\Controllers;

use App\Master_program;
use App\Rik_kegiatan;
use App\Mata_uang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RikController extends Controller
{
    public function index(Request $request)
    {   $id_instansi = Auth::user()->id_instansi;

        $kegiatan = Rik_kegiatan::all();
        
        if ($request->has('search')) {

            $program = Master_program::where('nama','LIKE'.'%'.$request->search.'%')

                            ->latest('updated_at')
                            ->paginate(5);

            $program->appends($request->only('search'));



        } else {

            $program = Master_program::wherein('id_instansi',[$id_instansi])->latest()->paginate(5);


        }


        return view('mitra.ngo.RIK.draftrik',['program' => $program,'kegiatan'=>$kegiatan,]);
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
    public function formtambahkgt($id){
        $program = Master_program::find($id);
        $uangs = Mata_uang::all();
        return view('mitra.ngo.RIK.tambahrencana',['uangs'=>$uangs, 'program'=>$program]);
    }
    public function tambahkgt(Request $request,$id){
        $program = Master_program::where('id',$id)->first();

        $kegiatan = Rik_kegiatan::create([
            'id_program'=>$program->id,
            'name'=>$request-> name,
            'detail_kegiatan'=>$request-> detail_kegiatan,
            'penerima_manfaat'=>$request-> penerima_manfaat,
            'indikator_outcome' =>$request-> indikator_outcome,
            'lokasi'=>$request-> lokasi_kerja,
            'tahun_awal'=>$request-> tahun_awal,
            'tahun_akhir'=>$request-> tahun_akhir,
            'mitra_kemendagri'=>$request-> mitra_kemendagri,
            'mitra_lapangan'=>$request-> mitra_lapangan,
            'mitra_kerja'=>$request-> mitra_kerja,
            'nominal_asing'=>$request-> nominal_asing,
            'mata_uang'=>$request-> mata_uang,
            'nominal_lokal'=>$request-> nominal_lokal,
            'sumber_dana'=>$request-> sumber_dana,
        ]);
        return redirect('/draft-rik');
    }
    //--------Bagian Fasker--------//

}
