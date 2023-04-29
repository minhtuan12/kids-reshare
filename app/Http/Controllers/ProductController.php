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
        // $products = Products::all();
        $cate_products = new CategoryController();
        $cate_products = $cate_products->show();
        $products = Products::all();
        return view('products', compact('products', 'cate_products'));
    }

    public function filter()
    {
        // $products = Products::filter('category')->get();
        $productss = Products::filter(['category'])->get();
        return view('products.filter', compact('productss'));
    }
}
