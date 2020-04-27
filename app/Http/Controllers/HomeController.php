<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (Auth::check()) {
            if($request->user()->level =='1'){
                return redirect('/ngo');
            }
            elseif($request->user()->level =='2'){
                        return redirect('/satker');
                }
            elseif($request->user()->level=='3'){
                return redirect('/fasker');
                }
            else
            {
                return redirect('/login');
            }
        }
        return redirect('/login');

    }
}
