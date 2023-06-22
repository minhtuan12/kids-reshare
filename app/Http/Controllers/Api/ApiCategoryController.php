<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiCategoryController extends Controller
{
    public function show()
    {
        $cate_product = DB::table('category')->orderby('id')->get();
        return $cate_product;
    }
}
