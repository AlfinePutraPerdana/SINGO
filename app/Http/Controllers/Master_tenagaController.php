<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Master_tenaga_asing;

use App\Instansi;

use Symfony\Component\HttpFoundation\File\File;

class Master_tenagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenagas = Master_tenaga_asing::where('status','3')->latest()->paginate(5);

        $instansis = Instansi::all();

        return view('mitra.ngo.tenaga.listtenaga',['tenagas' => $tenagas,'instansis'=>$instansis]);
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
        $tenaga = Master_tenaga_asing::find($id);

        $instansis = Instansi::all();

        return view('mitra.ngo.tenaga.lihatdata',['tenaga' => $tenaga,'instansis'=>$instansis]);
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

        if(empty($request->file('foto')))
        {
            $nama_foto = $tenaga->foto;
        }else
        {
            $foto = $request -> file('foto');
            $foto_lama = $tenaga->foto;
            File::delete('foto/'.$foto_lama);
            $nama_foto = time().'_'.$foto->getClientOriginalName();
            $lokasi_foto = 'foto';
            $foto -> move($lokasi_foto,$nama_foto);
        }

        if(empty($request->file('upload_passpor'))){
            $nama_passport = $tenaga -> upload_passpor;
        }else{
            $passport = $request -> file('upload_passpor');
            $passport_lama = $tenaga->upload_passpor;
            File::delete('passport/'.$passport_lama);
            $nama_passport = time().'_'.$passport->getClientOriginalName();
            $lokasi_passport = 'passport';
            $passport -> move($lokasi_passport, $nama_passport);
        }

        if(empty($request->file('cv_resume'))){
            $nama_cv = $tenaga -> cv_resume;
        }else{
            $cv = $request -> file('cv_resume');
            $cv_lama = $tenaga->cv_resume;
            File::delete('cv/'.$cv_lama);
            $nama_cv = time().'_'.$cv->getClientOriginalName();
            $lokasi_cv = 'cv';
            $cv -> move($lokasi_cv, $nama_cv);
        }

        if(empty($request->file('jobdesc'))){
            $nama_jobdesc = $tenaga -> jobdesc;
        }else{
            $jobdesc = $request -> file('jobdesc');
            $jobdesc_lama = $tenaga->jobdesc;
            File::delete('jobdesc/'.$jobdesc_lama);
            $nama_jobdesc = time().'_'.$jobdesc->getClientOriginalName();
            $lokasi_jobdesc = 'jobdesc';
            $jobdesc -> move($lokasi_jobdesc, $nama_jobdesc);
        }
        
        if(empty($request->file('dokumen_pendukung'))){
            $nama_dokumen = $tenaga -> dokumen_pendukung;
        }else{
            $dokumen = $request -> file('dokumen_pendukung');
            $dokumen_lama = $tenaga->dokumen_pendukung;
            File::delete('dokumen/'.$dokumen_lama);
            $nama_dokumen = time().'_'.$dokumen->getClientOriginalName();
            $lokasi_dokumen = 'dokumen pendukung';
            $dokumen -> move($lokasi_dokumen, $nama_dokumen);
        }
        
        if(($request->file('file_perpanjangan'))){
            $masa = $request -> file('file_perpanjangan');
            $nama_file = time().'_'.$masa->getClientOriginalName();
            $lokasi_file = 'perpanjang masa';
            $masa -> move($lokasi_file, $nama_file);
        }elseif (empty($request->file('file_perpanjangan'))){
            
            $nama_file = $tenaga -> file_perpanjangan;
        }else {
            
                $masa = $request -> file('file_perpanjangan');
                $file_lama = $tenaga->file_perpanjangan;
                File::delete('perpanjang masa/'.$file_lama);
                $nama_file = time().'_'.$masa->getClientOriginalName();
                $lokasi_file = 'perpanjang masa';
                $masa -> move($lokasi_file, $nama_file);
        }
        


        $tenaga->update([
                'nama' => $request -> nama,
                'jenis_kelamin' => $request -> jenis_kelamin,
                'tempat_lahir'  => $request -> tempat_lahir,
                'tanggal_lahir' => $request -> tanggal_lahir,
                'kewarganegaraan' => $request -> kewarganegaraan,
                'no_passport' => $request -> no_passport,
                'tgl_berlaku_awal' => $request -> tgl_berlaku_awal,
                'tgl_berlaku_akhir' => $request -> tgl_berlaku_akhir,
                'id_instansi' => $request -> id_instansi,
                'kategori' => $request -> kategori,
                'tujuan' => $request -> tujuan,
                'kegiatan' => $request -> kegiatan,
                'jabatan' => $request -> jabatan,
                'foto' => $nama_foto,
                'upload_passpor' => $nama_passport,
                'cv_resume' => $nama_cv,
                'jobdesc' => $nama_jobdesc,
                'dokumen_pendukung' => $nama_dokumen,
                'file_perpanjangan' => $nama_file,
                'tgl_awal' => $request -> tgl_awal,
                'tgl_akhir' => $request -> tgl_akhir

        ]);

        return redirect('/list-tenaga')->with('sukses','Data berhasil DI Update');
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
