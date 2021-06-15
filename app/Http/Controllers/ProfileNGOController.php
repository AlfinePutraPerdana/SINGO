<?php

namespace App\Http\Controllers;

use App\User;

use App\instansi;

use App\Ngo;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileNGOController extends Controller
{
    public function profile($id){

        // $id_ngo = Auth::user()->id_instansi;

        $ngo = Ngo::find($id);
        
        $users = User::find($id);

        $instansis = instansi::find($id);
       
        return view('mitra.ngo.profile.profile',['users'=>$users,'instansis'=>$instansis,'ngo'=>$ngo]);
    }
}
