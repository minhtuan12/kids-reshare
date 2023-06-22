<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Products;
use Illuminate\Support\Facades\Redirect;

class ApiProductController extends Controller
{
    public function index($id = null)
    {
        if ($id == null)
            return response()->json([
                'data' => Products::orderBy('prod_name', 'asc')->get()], 200);
        return response()->json(['data' => Products::find($id)], 200);
    }

    public function create()
    {
        // $products = Products::all();
        $cate_products = new ApiCategoryController();
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
