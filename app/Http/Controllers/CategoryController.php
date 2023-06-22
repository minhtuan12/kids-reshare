<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show()
    {
        $cate_product = DB::table('category')->orderby('id')->get();
        return $cate_product;
    }
}
