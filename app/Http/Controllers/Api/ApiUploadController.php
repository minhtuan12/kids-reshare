<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Products;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function create()
    {
        $cate_products = new CategoryController();
        $cate_products = $cate_products->show();
        return view('upload')->with('cate_products', $cate_products);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'prod_name' => ['required'],
        //     'buy_date' => ['required' | 'after:01/01/2000'],
        //     'img' => ['required' | 'mimes:jpeg,bmp,png'],
        // ], [
        //     'prod_name.required' => 'Product name is required',
        //     'buy_date.required' => 'Date is required',
        //     'img.required' => 'Image is required',
        // ]);


        $size = '';
        if (is_null($request->input('size_clothes')))
            $size = $request->input('size_shoes');
        else
            $size = $request->input('size_clothes');

        $descr = $request->input('descr');
        if (!isset($descr))
            $descr = '';

        if ($request->hasFile('img')) {

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->img->store('prod_image', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = Products::create([
                "prod_name" => $request->input('prod_name'),
                "user_id" => Auth::id(),
                "descr" => $descr,
                'buy_date' => $request->input('buy_date'),
                'condition' => $request->input('condition'),
                'material' => $request->input('material'),
                'size' => $size,
                'category_id' => $request->input('category'),
                // 'created_at' => $request->now(),
                "img" => $request->img->hashName()
            ]);
            $product->save();
        }

            // } else {
            //     $product = Products::create([
            //         "prod_name" => $request->input('prod_name'),
            //         "descr" => $descr,
            //         'buy_date' => $request->input('buy_date'),
            //         'condition' => $request->input('condition'),
            //         'size' => $size,
            //         'category_id' => $request->input('category'),
            //         'material' => $request->input('material'),
            //         // 'created_at' => $request->now(),
            //     ]);
            //     $product->save();
            // }
        return redirect()->route('products');
    }
}
