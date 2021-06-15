<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Master_tenaga_asing;


use App\Instansi;

use Illuminate\Support\Facades\File;

class TenagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->has('search'))
        {
            $tenaga = Master_tenaga_asing::where('nama','LIKE','%'.$request->search.'%')
                                            ->wherein('status',[0,1,2])
                                            ->latest('updated_at')
                                            ->paginate(5);
            
             $tenaga->appends($request->only('search'));

        }else{
            
            $tenaga = Master_tenaga_asing::wherein('status',[0,1,2])->latest('updated_at')->paginate(5);
        }
        

        return view('mitra.ngo.tenaga.tenaga',['tenaga' => $tenaga]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $instansis = Instansi::all()->where('id_kategori',2);

        return view('mitra.ngo.tenaga.ajukantenaga',['instansis' => $instansis]);
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

        $pesan = [
            'required' => ':attribute Wajib di Isi',
            'mimes' => ':attribute Harus File pdf',
            'upload_passpor.mimes' => 'Lampirkan Passport Harus File pdf',
            'cv_resume.mimes' => 'Lampirkan CV Harus File pdf',
            'jobdesc.mimes' => 'Lampirkan Jobdesk Harus File pdf',
            'jobdesc.mimes' => 'Lampirkan Jobdesk Harus File pdf',
            'image' => ':attribute Harus File Gambar',
            'max' => ':attribute file Maksimal 3mb'
        ];

        $this->validate($request,[
                'nama' => 'required',
                'jenis_kelamin' => 'required',
                'tempat_lahir'  => 'required',
                'tanggal_lahir' => 'required',
                'kewarganegaraan' => 'required',
                'no_passport' => 'required',
                'tgl_berlaku_awal' => 'required',
                'tgl_berlaku_akhir' => 'required',
                'kategori' => 'required',
                'tujuan' => 'required',
                'kegiatan' => 'required',
                'jabatan' => 'required',
                'tgl_awal' => 'required',
                'tgl_akhir' => 'required',
                'foto' => 'required|image|max:3000',
                'upload_passpor' => 'required|mimes:pdf|max:3000',
                'cv_resume' => 'required|mimes:pdf|max:3000',
                'jobdesc' => 'required|mimes:pdf|max:3000',
                'dokumen_pendukung' => 'required|mimes:pdf|max:3000'
                
        ],$pesan);

        $foto = $request ->foto;
        $nama_foto = $foto->getClientOriginalName();
        $namafile_foto = str_random(30).".".$foto->getClientOriginalExtension();
        $foto->storeAs('Tenaga Asing/Foto',$namafile_foto);
        $filename_foto = $namafile_foto;


        $passport = $request ->upload_passpor;
        $nama_passport = $passport->getClientOriginalName();
        $namafile_passport = str_random(30).".".$passport->getClientOriginalExtension();
        $passport->storeAs('Tenaga Asing/Passport',$namafile_passport);
        $filename_passport = $namafile_passport;

        
        
        $cv = $request ->cv_resume;
        $nama_cv = $cv->getClientOriginalName();
        $namafile_cv = str_random(30).".".$cv->getClientOriginalExtension();
        $cv->storeAs('Tenaga Asing/CV',$namafile_cv);
        $filename_cv = $namafile_cv;
        
        $jobdesc = $request ->jobdesc;
        $nama_jobdesc = $jobdesc->getClientOriginalName();
        $namafile_job = str_random(30).".".$jobdesc->getClientOriginalExtension();
        $jobdesc->storeAs('Tenaga Asing/Jobdesk',$namafile_job);
        $filename_jobdesc = $namafile_job;
        
        $dokumen = $request ->dokumen_pendukung;
        $nama_dokumen = $dokumen->getClientOriginalName();
        $namafile_dokumen = str_random(30).".".$dokumen->getClientOriginalExtension();
        $dokumen->storeAs('Tenaga Asing/Dokumen pendukung',$namafile_dokumen);
        $filename_dokumen = $namafile_dokumen;
        
        if(($request->file('file_perpanjangan'))){
            $masa = $request -> file('file_perpanjangan');
            $nama_perpanjangan = $masa->getClientOriginalName();
            $namafile_perpanjangan = str_random(30).".".$masa->getClientOriginalExtension();
            $masa->storeAs('Tenaga Asing/Perpanjangan masa',$namafile_perpanjangan);
            $filename_perpanjangan = $namafile_perpanjangan;
        }elseif (empty($request->file('file_perpanjangan'))){
            
            $nama_perpanjangan = null;
            $filename_perpanjangan = null; 

        }else {

                $masa = $request -> file('file_perpanjangan');
                $file_lama = $tenaga->filename_perpanjangan;
                File::delete('Tenaga Asing/Perpanjang masa/'.$file_lama);
                $nama_perpanjangan = $masa->getClientOriginalName();
                $namafile_perpanjangan = str_random(30).".".$masa->getClientOriginalExtension();
                $masa->storeAs('storage/Tenaga Asing/perpanjangan masa',$namafile_perpanjangan);
                $filename_perpanjangan = $namafile_perpanjangan;

                
        }

           $tenaga =  Master_tenaga_asing::create([
                'nama' => $request -> nama,
                'jenis_kelamin' => $request -> jenis_kelamin,
                'tempat_lahir'  => $request -> tempat_lahir,
                'tanggal_lahir' => $request -> tanggal_lahir,
                'kewarganegaraan' => $request -> kewarganegaraan,
                'no_passport' => $request -> no_passport,
                'tgl_berlaku_awal' => $request -> tgl_berlaku_awal,
                'tgl_berlaku_akhir' => $request -> tgl_berlaku_akhir,
                'kategori' => $request -> kategori,
                'tujuan' => $request -> tujuan,
                'kegiatan' => $request -> kegiatan,
                'jabatan' => $request -> jabatan,
                'foto' => $nama_foto,
                'filename_foto' => $filename_foto,
                'upload_passpor' => $nama_passport,
                'filename_passport' => $filename_passport,
                'cv_resume' => $nama_cv,
                'filename_cv' => $filename_cv,
                'jobdesc' => $nama_jobdesc,
                'filename_jobdesc' => $filename_jobdesc,
                'dokumen_pendukung' => $nama_dokumen,
                'filename_dokumen' => $filename_dokumen,
                'file_perpanjangan' => $nama_perpanjangan,
                'filename_perpanjangan' => $filename_perpanjangan,
                'tgl_awal' => $request -> tgl_awal,
                'tgl_akhir' => $request -> tgl_akhir,
                'status' => 0,
                'status_keaktifan' => 'Non-Aktif'

        ]);

        return redirect('/tenaga')->with('sukses','Data Berhasil ditambah');
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

        return view('mitra.ngo.tenaga.revisitenaga',['tenaga' => $tenaga, 'instansis' => $instansis]);
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
        $tenaga = Master_tenaga_asing::find($id);

        if(empty($request->file('foto')))
        {
            $nama_foto = $tenaga->foto;
            $filename_foto = $tenaga->filename_foto;

        }else
        {
            
            $foto = $request ->foto;
            $foto_lama = $tenaga->filename_foto;
            File::delete('storage/Tenaga Asing/Foto/'.$foto_lama);
            $nama_foto = $foto->getClientOriginalName();
            $namafile_foto = str_random(30).".".$foto->getClientOriginalExtension();
            $foto->storeAs('Tenaga Asing/Foto',$namafile_foto);
            $filename_foto = $namafile_foto;
            
            // $foto = $request -> file('foto');
            // $foto_lama = $tenaga->foto;
            // File::delete('foto/'.$foto_lama);
            // $nama_foto = time().'_'.$foto->getClientOriginalName();
            // $lokasi_foto = 'foto';
            // $foto -> move($lokasi_foto,$nama_foto);
        }

        if(empty($request->file('upload_passpor'))){
            
            $nama_passport = $tenaga -> upload_passpor;
            $filename_passport = $tenaga -> filename_passport;

        }else{

            $passport = $request ->upload_passpor;
            $passport_lama = $tenaga->filename_passport;
            File::delete('storage/Tenaga Asing/Passport/'.$passport_lama);
            $nama_passport = $passport->getClientOriginalName();
            $namafile_passport = str_random(30).".".$passport->getClientOriginalExtension();
            $passport->storeAs('Tenaga Asing/Passport',$namafile_passport);
            $filename_passport = $namafile_passport;

        }

        if(empty($request->file('cv_resume'))){

            $nama_cv = $tenaga ->cv_resume;
            $filename_cv = $tenaga ->filename_cv;

        }else{
            
            $cv = $request ->cv_resume;
            $cv_lama = $tenaga->filename_cv;
            File::delete('storage/Tenaga Asing/CV/'.$cv_lama);
            $nama_cv = $cv->getClientOriginalName();
            $namafile_cv = str_random(30).".".$cv->getClientOriginalExtension();
            $cv->storeAs('Tenaga Asing/CV',$namafile_cv);
            $filename_cv = $namafile_cv;
            
            
        }

        if(empty($request->file('jobdesc'))){

            $nama_jobdesc = $tenaga -> jobdesc;
            $filename_jobdesc = $tenaga -> filename_jobdesc;

        }else{
            
            $jobdesc = $request ->jobdesc;
            $jobdesc_lama = $tenaga->filename_jobdesc;
            File::delete('storage/Tenaga Asing/Jobdesk/'.$jobdesc_lama);
            $nama_jobdesc = $jobdesc->getClientOriginalName();
            $namafile_job = str_random(30).".".$jobdesc->getClientOriginalExtension();
            $jobdesc->storeAs('Tenaga Asing/Jobdesk',$namafile_job);
            $filename_jobdesc = $namafile_job;

            
        }
        
        if(empty($request->file('dokumen_pendukung'))){

            $nama_dokumen = $tenaga -> dokumen_pendukung;
            $filename_dokumen = $tenaga -> filename_dokumen;

        }else{
            
            $dokumen = $request ->dokumen_pendukung;
            $dokumen_lama = $tenaga->filename_dokumen;
            File::delete('storage/Tenaga Asing/Dokumen pendukung/'.$dokumen_lama);
            $nama_dokumen = $dokumen->getClientOriginalName();
            $namafile_dokumen = str_random(30).".".$dokumen->getClientOriginalExtension();
            $dokumen->storeAs('Tenaga Asing/Dokumen pendukung',$namafile_dokumen);
            $filename_dokumen = $namafile_dokumen;
            
            
        }

        if(($request->file('file_perpanjangan'))){
            
            $masa = $request -> file('file_perpanjangan');
            $nama_perpanjangan = $masa->getClientOriginalName();
            $namafile_perpanjangan = str_random(30).".".$masa->getClientOriginalExtension();
            $masa->storeAs('Tenaga Asing/Perpanjangan masa',$namafile_perpanjangan);
            $filename_perpanjangan = $namafile_perpanjangan;

        }elseif (empty($request->file('file_perpanjangan'))){
            
            $nama_file = $tenaga -> file_perpanjangan;
            $filename_perpanjangan = $tenaga -> filename_perpanjangan;

        }else {
            
            $masa = $request -> file('file_perpanjangan');
            $file_lama = $tenaga->filename_perpanjangan;
            File::delete('storage/Tenaga Asing/Perpanjang masa/'.$file_lama);
            $nama_perpanjangan = $masa->getClientOriginalName();
            $namafile_perpanjangan = str_random(30).".".$masa->getClientOriginalExtension();
            $masa->storeAs('Tenaga Asing/Perpanjangan masa',$namafile_perpanjangan);
            $filename_perpanjangan = $namafile_perpanjangan;
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
                'kategori' => $request -> kategori,
                'tujuan' => $request -> tujuan,
                'kegiatan' => $request -> kegiatan,
                'jabatan' => $request -> jabatan,
                'foto' => $nama_foto,
                'filename_foto' => $filename_foto,
                'upload_passpor' => $nama_passport,
                'filename_passport' => $filename_passport,
                'cv_resume' => $nama_cv,
                'filename_cv' => $filename_cv,
                'jobdesc' => $nama_jobdesc,
                'filename_jobdesc' => $filename_jobdesc,
                'dokumen_pendukung' => $nama_dokumen,
                'filename_dokumen' => $filename_dokumen,
                'file_perpanjangan' => $nama_file,
                'filename_perpanjangan' => $filename_perpanjangan,
                'tgl_awal' => $request -> tgl_awal,
                'tgl_akhir' => $request -> tgl_akhir,
                'catatan' => $request -> catatan

        ]);

        return redirect('/tenaga')->with('sukses','Data Berhasil diupdate');
    }

    
    public function send(Request $request)
    {
        //
        

        if($request->tenaga != null ){
            foreach ($request->tenaga as $tenaga_val){
                $tenaga = Master_tenaga_asing::find($tenaga_val);
                $tenaga->update([
                    'status'=> 1,
                    
                    ]);
                 
            }
        }else{
            return redirect('/tenaga');
        }
       
           
        

        return redirect('/tenaga')->with('sukses','Data Berhasil dikirim');

    }
}
