<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Products;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CategoryController;
class UploadController extends Controller
{
    public function create()
    {
        $cate_products = new CategoryController();
        $cate_products = $cate_products->show();
        return view('upload') -> with('cate_products' , $cate_products);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'prod_name' => ['required'],
        //     'buy_date' => ['required']
        // ]);
        $userId = auth()->id();
        $size='';
        if (is_null($request->input('size_clothes')))  $size = $request->input('size_shoes') ;
        else $size = $request->input('size_clothes') ;
        if ($request->hasFile('file')) {

            // $request->validate([
            //     'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            // ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('prod_image', 'public');


            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Products([
                "prod_name" => $request->input('prod_name'),
                'user_id' => $userId ,
                // "category_id" => $request ->input('')
                "descr" => $request->input('descr'),
                'buy_date' => $request->input('buy_date'),
                'condition' =>$request->input('condition'),
                'material' => $request->input('material'),
                'size' =>$size,
                'category_id' =>$request->input('category'),
                // 'created_at' => $request->now(),
                "img" => $request->file->hashName(),
            ]);

            $product->save(); // Finally, save the record.
        } else {
            $product = new Products([
                "prod_name" => $request->input('prod_name'),
                'user_id' => $userId ,
                "descr" => $request->input('descr'),
                'buy_date' => $request->input('buy_date'),
                'condition' =>$request->input('condition'),
                'size' =>$size,
                'category_id' =>$request->input('category'),
                'material' => $request->input('material'),
                // 'created_at' => $request->now(),
            ]);
            $product->save();
        }
        return redirect()->route('products');
    }
}
