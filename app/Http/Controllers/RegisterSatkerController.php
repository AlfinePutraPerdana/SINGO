<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterSatkerController extends Controller
{
   /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/list-satker';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function index(){

        return view('mitra.Fasker.kelola_akun_satker.tambah_akun');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_hp' => ['required', 'string','min:10', 'max:12'],
        ]);
    }
     /**
     * Create a new user instance after a valid registration.
     *
     *@param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request){
        return User::create([
            'name' => $request -> name,
            'username'=>$request -> username,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
            'no_hp' => $request -> no_hp,
            'status' => 1,
            'level' =>2
        ]);
    }

}
