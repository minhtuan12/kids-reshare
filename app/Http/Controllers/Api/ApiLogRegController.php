<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LogRegController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login_register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function create()
    {
        return view('login_register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'username' => ['required', 'string', 'max: 255'],
        //     'password' => ['required', 'confirmed'],
        //     'phone' => ['size: 10', 'unique: username', 'numeric'],
        // ]);
        
        // $allRequest = $request->all();
        // $validator = $this->validator($allRequest);
        $user = user::create([
            'fullname' => $request->input('fullname'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            // 'created_at' => now(),
            // 'modified_at' => now(),
        ]);
        
        if ($request->input('cfPassword') != $request->input('password')) 
            return redirect()->route('login_register.register')->with('wrong', 'PLEASE CONFIRM PASSWORD!');
        
        $user->save();
        return redirect()->route('login_register');
    }
}
