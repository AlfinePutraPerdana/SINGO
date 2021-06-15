<?php

namespace App\Http\Controllers;

use App\Master_program;
use App\Rik_kegiatan;
use Illuminate\Http\Request;

class Verif_rikController extends Controller
{
 public function index(){
     $program = Master_program::paginate(5);

     $kegiatan = Rik_kegiatan::where('status','0')->latest()->paginate(5);

     return view('mitra.Fasker.RIK.master_rik',['program'=>$program,'kegiatan'=>$kegiatan]);
 }
}
