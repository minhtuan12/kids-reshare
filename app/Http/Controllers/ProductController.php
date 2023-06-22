<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Products;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index($id = null)
    {
        if ($id == null)
            return Products::orderBy('prod_name', 'asc')->get();
        return response(['data'=>Products::find($id), 'view'=>'products']);
    }

    public function create()
    {
        $products = DB::table('products')
            ->where('upload', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        $categoryController = new CategoryController();
        $cate_products = $categoryController->show();
        return view('products', compact('products', 'cate_products'));
    }

    public function filter_products(Request $request)
    {
        $sort = $request->sort;
        $condition = explode(" ", $request->condition);
        $start = substr($condition[0], 0, strlen($condition[0]) - 1);
        $end = substr($condition[2], 0, strlen($condition[2]) - 1);

        $query = DB::table('products')
            ->where('condition', '>=', $start)
            ->where('condition', '<=', $end)
            ->where('upload',1)
            ->orderBy($sort);

        if ($request->has('sizes')) {
            $sizes = $request->sizes;
            $query->whereIn('size', $sizes)
                ->where('upload',1);
        }

        if ($request->has('categories')) {
            $categories = $request->categories;
            $query->whereIn('category_id', $categories)
                ->where('upload',1);
        }

        $products = $query->get();

        return view('search_result', compact('products'))->render();
    }

    public function manage_products_return()
    {
        $userId = auth()->id();
        $products = DB::table('products')->where('user_id', $userId)->get();
        // $g_products = DB::table('get_product')->where('user_id', $userId)->get();

        return view('products_manage', compact('products'));
    }

    public function delete_product($id)
    {
        $product = Products::find($id);
        if ($product) {
            $product->delete();
        }

        return redirect()->route('p_manage');
    }


    public function product_detail($id) {
        $product = DB::table('products')->where('id', $id)->first();
        $category = DB::table('category')->where('id', $product->category_id)->first()->category_name;
        $user = DB::table('user')->where('id' , $product->user_id)->first();
        return view('detail_product', compact('product','category','user'));
    }
}
