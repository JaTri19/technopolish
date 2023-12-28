<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'telepon' => 'nullable|string',
                'pekerjaan' => 'nullable|string',
                'nik' => 'nullable|string',
                'tanggal_lahir' => 'nullable|string',
                'alamat' => 'nullable|string',
                'domisili' => 'nullable|string',
                'kode_pos' => 'nullable|string',
                'kota' => 'nullable|string',
                'kecamatan' => 'nullable|string',
                'kelurahan' => 'nullable|string',
                'desa' => 'nullable|string',
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nik' => $data['nik'],
            'domisili' => $data['domisili'],

        ]);
        // dd($newUser);
        return $newUser->assignRole("pemohon");
    }



    protected function createPenyelia(array $data){
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newUser->assignRole("penyelia");

        return redirect()->route('admin')->with('success','Account Operator Berhasil dibuat');
    }

    protected function createSurveyor(array $data){
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newUser->assignRole("surveyor");

        return redirect()->route('admin')->with('success','Account Operator Berhasil dibuat');
    }

    protected function createKepalaDinas(array $data){
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newUser->assignRole("kepala-dinas");

        return redirect()->route('admin')->with('success','Account Operator Berhasil dibuat');
    }

    protected function createAuditor(array $data){
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newUser->assignRole("auditor");

        return redirect()->route('admin')->with('success','Account Operator Berhasil dibuat');
    }

    protected function createDinas(array $data){
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newUser->assignRole("dinas");

        return redirect()->route('admin')->with('success','Account Operator Berhasil dibuat');
    }

    protected function createWalikota(array $data){
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newUser->assignRole("walikota");

        return redirect()->route('admin')->with('success','Account Operator Berhasil dibuat');
    }



}
