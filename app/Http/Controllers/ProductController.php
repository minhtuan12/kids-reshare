<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Products;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function create()
    {
        $products = Products::all();
        return view('products', compact('products'));
    }

}
