<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function index($id)
    {
        return KidProfile::find($id);
    }

    public function userInfo()
    {
        $user_data = Auth::user();
        $id = $user_data->id;
        $kids = KidProfile::all();
        return view('kid_info', ['id' => $id])->with(['user_data' => $user_data, 'kids' => $kids]);
    }

//    public function create()
//    {
//        $user_data = Auth::user();
//        return view('account')->with(['user_data' => $user_data]);
//    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('avatar')) {
            $request->avatar->store('avatar', 'public');

            // user data
            User::where('id', $id)->update([
                'fullname' => $request->input('fullname'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
                'address' => $request->input('address'),
                'link' => $request->input('link'),
                'avatar' => $request->avatar->hashName(),
                'updated_at' => now(),
            ]);
        } else {
            User::where('id', $id)->update([
                'fullname' => $request->input('fullname'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
                'address' => $request->input('address'),
                'link' => $request->input('link'),
                'updated_at' => now(),
            ]);
        }
        return redirect()->route('account.create', ['id' => $id])->with('success', 'Update Successfully');
    }

//    public function kidInfo(Request $request)
//    {
//        // children data
//        $birth = $request->input('age');
//        $currentYear = date('Y');
//        $note = $request->input('take_note');
//        for ($i = 0; $i < count($note); $i++)
//            if (!isset($note[$i]))
//                $note[$i] = '';
//
//        $user_id = Auth::user()->id;
//        $gender = $request->input('gender');
//        $height = $request->input('height');
//        $weight = $request->input('weight');
//        $take_note = $note;
//
//        for ($i = 0; $i < count($birth); $i++) {
//            $kid = [
//                'age' => abs($currentYear - date('Y', strtotime($birth[$i]))),
//                'user_id' => $user_id,
//                'gender' => $gender[$i],
//                'height' => $height[$i],
//                'weight' => $weight[$i],
//                'take_note' => $take_note[$i],
//            ];
//            KidProfile::create($kid);
//        }
//
//        return redirect()->route('userInfo', ['kids' => $kid]);
//    }

    public function kidInfo(Request $request, $id)
    {
        // children data
        $birth = $request->input('agep');
        $currentYear = date('Y');
        $note = $request->input('notep');
        if (!isset($note))
            $note = '';

        $user_id = Auth::user()->id;
        $gender = $request->input('genderp');
        $height = $request->input('heightp');
        $weight = $request->input('weightp');
        $take_note = $note;

        $kid = [
            'age' => abs($currentYear - date('Y', strtotime($birth))),
            'user_id' => $user_id,
            'gender' => $gender,
            'height' => $height,
            'weight' => $weight,
            'take_note' => $take_note,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        KidProfile::create($kid);

        return redirect()->route('account.create', ['id' => $id]);
    }

//    public function updateKidInfo(Request $request, $id)
//    {
//        $birth = $request->input('age');
//        $currentYear = date('Y');
//        $note = $request->input('take_note');
//        if (!isset($note))
//            $note = '';
//        $take_note = $note;
//
//        KidProfile::where([
//            ['user_id', $id],
//            ['id', $request->input('kid_id')],
//        ])->update([
//            'age' => abs($currentYear - date('Y', strtotime($birth))),
//            'gender' => $request->input('gender'),
//            'height' => $request->input('height'),
//            'weight' => $request->input('weight'),
//            'take_note' => $take_note,
//            'updated_at' => now(),
//        ]);
//        return redirect()->route('account.create', ['id' => $id]);
//    }

    public function updateKidInfo(Request $request, $id)
    {
        $birth = $request->input('age');
        $currentYear = date('Y');
        $note = $request->input('take_note');
        if (!isset($note))
            $note = '';

        $kid_id = $request->input('kid_id');
        $gender = $request->input('gender');
        $height = $request->input('height');
        $weight = $request->input('weight');
        $take_note = $note;

        KidProfile::where([
            ['user_id', $id],
            ['id', $kid_id],
        ])->update([
            'age' => abs($currentYear - date('Y', strtotime($birth))),
            'gender' => $gender,
            'height' => $height,
            'weight' => $weight,
            'take_note' => $take_note,
            'updated_at' => now(),
        ]);
        return redirect()->route('account.create', ['id' => $id]);
    }
}
