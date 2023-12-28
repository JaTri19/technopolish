<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL) ? $this->username() : 'telepon';

        return [
            $field => $request->get($this->username()),
            'password' => $request->password,
        ];
    }

    protected function authenticated(Request $request, $user)
    {

        if($user->hasRole('admin')){
            return redirect()->route('admin');
        }
        if($user->hasRole('dinas')){
            return redirect()->route('dinas');
        }
        if($user->hasRole('walikota')){
            return redirect()->route('walikota');
        }
        if($user->hasRole('kepala-dinas')){
            return redirect()->route('kepala-dinas');
        }
        if($user->hasRole('penyelia')){
            return redirect()->route('penyelia');
        }
        if($user->hasRole('surveyor')){
            return redirect()->route('surveyor');
        }
        if($user->hasRole('auditor')){
            return redirect()->route('auditor');
        }
        if($user->hasRole('operator')){
            return redirect()->route('operator');
        }
        if($user->hasRole('pemohon')){
            return redirect()->route('pemohon');
        }
        return redirect()->route('pemohon')->with('success','sukses login');



    }
}
