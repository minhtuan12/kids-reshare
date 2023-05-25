<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;

class AdminController extends Controller
{
    public function create()
    {
        return view('login_admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('admin')->where('username', '=', $request->username)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return redirect()->route('admin.a_approval'); // Redirect to admin/awaiting_approval
            } else {
                return back()->with('fail', 'Wrong password.');
            }
        } else {    
            return back()->with('fail', 'User is not registered');
        }
    }

    public function awaiting_approval_return()
    {
        $products = DB::table('products')->where('upload', null)->get();
        return view('admin_awaiting_approval', compact('products'));
    }

    public function approved_return()
    {
        $products = DB::table('products')->where('upload', 1)->get();
        return view('admin_approved', compact('products'));
    }

    public function approve_product($id)
    {
        echo "approve_product";
        DB::table('products')->where('id', $id)->update(['upload' => 1]);
        return redirect()->route('admin.a_approval');
    }
    public function delete_product_aa($id){
        $product = Products::find($id);
        if ($product) {
            $product->delete();
        } 
    
        return redirect()->route('admin.a_approval');
    }
    public function delete_product_a($id){
        $product = Products::find($id);
        if ($product) {
            $product->delete();
        } 
    
        return redirect()->route('admin.approved');
    }
}
