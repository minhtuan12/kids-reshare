<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\user;
use App\Models\KidProfile;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;



class AccountController extends Controller
{

    public function userInfo()
    {
        $user_data = Auth::user();
        $id = $user_data->id;
        return view('kid_info', ['id' => $id])->with(['user_data' => $user_data]);
    }

    public function create()
    {
        $user_data = Auth::user();
        return view('account')->with(['user_data' => $user_data]);
    }

    public function update(Request $request, $id)
    {
        // user data
        $user = user::where("id", $id)->update([
            'fullname' => $request->input('fullname'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'updated_at' => now(),
        ]);
        return redirect()->route('account.create', ['id' => $id]);
    }

    public function kidInfo(Request $request)
    {
        // children data
        $birth = $request->input('age');
        $current = date('Y', strtotime(now()));
        $note = $request->input('note');
        if (!isset($note))
            $note = '';

        $kid = KidProfile::create([
            'age' => abs($current - date('Y', strtotime($birth))),
            'user_id' => Auth::user()->id,
            'gender'=> $request->input('gender'),
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'take_note' => $note,
        ]);
        $kid->save();
        return redirect()->route('index');
    }
}
