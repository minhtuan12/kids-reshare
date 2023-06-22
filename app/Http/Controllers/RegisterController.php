<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{

    public function create()
    {
        return view('register');
    }


    public function store(Request $request)
    {

        $request->validate([
            'fullname' => ['required', 'string', 'max: 255'],
            'password' => ['required', 'confirmed'],
            'phone' => ['string', 'max: 10', 'unique: username'],
        ]);

        $user = user::create([
            'fullname' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'created_at' => now(),
            'modified_at' => now(),
        ]);

        // $user = array([
        //     'username' => $request->input('username'),
        //     'password' => Hash::make($request->input('password')),
        //     'phone' => $request->input('phone'),
        //     'created_at' => now(),
        //     'modified_at' => now(),
        // ]);

        // $username = $request->input('username');
        // $password = Hash::make($request->input('password'));
        // $phone = $request->input('phone');
        // $created_at = now();
        // $modified_at = now();

        // DB::insert('insert into users (username, password, phone, created_at, modified_at)
        // values (?, ?, ?, ?)', [$username, $password, $phone, $created_at, $modified_at]);
        $user->save();
        return view('index');
    }
}
