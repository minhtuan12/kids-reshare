<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\user;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;

class LogController extends Controller
{
    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(Request $request)
    {
        $password = $request->input('password');
        $phone = $request->input('phone');

        if (Auth::attempt(['phone' => $phone, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect()->route('index')->with('success', 'LOGIN SUCCESSFULLY!');
        }
        return redirect()->route('login_register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
