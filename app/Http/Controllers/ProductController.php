<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Products;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    public function create()
    {
        $products = Products::all();
        $cate_products = new CategoryController();
        $cate_products = $cate_products->show();
        return view('products', compact('products')) -> with('cate_products' , $cate_products);
    }

}
