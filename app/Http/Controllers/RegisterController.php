<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Showregisterform(){
        return view('dashboard.register');
    }

    public function validation($request){
        return $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|max:255',
            'negara' => 'required|max:255',
            'nomor' => 'required'
        ]);
    }
}
