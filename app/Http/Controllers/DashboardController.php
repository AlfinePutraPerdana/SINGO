<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Artikel;


class DashboardController extends Controller
{
    public function index(){
        $news = Artikel::all();
        return view('dashboard.index', ['news' => $news]);
    }

    public function login(){
        return view('dashboard.login');
    }
    public function register(){
        return view('dashboard.register');
    }
}
