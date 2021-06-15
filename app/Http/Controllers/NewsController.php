<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Artikel;

class NewsController extends Controller
{
    public function index(){
        $artikel = Artikel::all();

        return view('mitra.ngo.dokumentasi.artikel', ['artikel' => $artikel]);
    }

    public function new(){
        return view('mitra.ngo.dokumentasi.tambahartikel');
    }

    public function store(Request $request){
        //Foto
        if(empty($request -> file('foto'))){
            $nama_foto = null;
        }
        else{
            $foto = $request -> file('foto');
            $nama_foto = time().'_'.$foto -> getClientOriginalName();
            $foto -> move('Artikel_file/foto', $nama_foto);
        }

        //Video
        if(empty($request -> file('video'))){
            $nama_video = null;
        }
        else{
            $video = $request -> file('video');
            $nama_video = time().'_'.$video -> getClientOriginalName();
            $video -> move('Artikel_file/video', $nama_video);
        }

        $create = Artikel::create([
            'id' => $request -> id,
            'judul' => $request -> judul,
            'artikel' => $request -> artikel,
            'foto' => $nama_foto,
            'video' => $nama_video,
            'status_verif' => $request -> status,
            'kategori' => $request -> kategori
        ]);

        return redirect('/artikel');
    }

    public function edit($id){
        $data = DB::table('Artikels')->where('id', $id)->get();

        return view('mitra.ngo.dokumentasi.editartikel', ['data' => $data]);
    }

    public function update(Request $request){
        $index = Artikel::find($request -> id);

        //Foto
        if(empty($request -> file('foto'))){
            $nama_foto = $index -> foto;
        }
        else{
            $foto_lama = $index -> foto;
            File::delete('Artikel_file/foto/'.$foto_lama);
            $foto = $request -> file('foto');
            $nama_foto = time().'_'.$foto -> getClientOriginalName();
            $foto -> move('Artikel_file/foto', $nama_foto);
        }

        //Video
        if(empty($request -> file('video'))){
            $nama_video = $index -> video;
        }
        else{
            $video_lama = $index -> video;
            File::delete('Artikel_file/video/'.$video_lama);
            $video = $request -> file('video');
            $nama_video = time().'_'.$video -> getClientOriginalName();
            $video -> move('Artikel_file/video', $nama_video);
        }

        $index -> update([
            'judul' => $request -> judul,
            'artikel' => $request -> artikel,
            'foto' => $nama_foto,
            'video' => $nama_video,
            'status_verif' => $request -> status,
            'kategori' => $request -> kategori
        ]);

        return redirect('/artikel');
    }

    public function delete($id){
        $index = Artikel::find($id);
        $nama_foto = $index -> foto;
        $nama_video = $index -> video;

        File::delete('Artikel_file/foto/'.$nama_foto);
        File::delete('Artikel_file/video/'.$nama_video);
        $data = DB::table('artikels')->where('id', $id)->delete();

        return redirect('/artikel');
    }

    public function frontview($id){
        $news = Artikel::all();

        $data = DB::table('Artikels')->where('id', $id)->get();

        return view('dashboard.news', ['news' => $news], ['data' => $data]);
    }
}
