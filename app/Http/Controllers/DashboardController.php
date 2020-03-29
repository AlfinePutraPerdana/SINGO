<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Artikel;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
