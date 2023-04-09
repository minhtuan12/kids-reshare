<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Products;
use Illuminate\Support\Facades\Redirect;

class UploadController extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'prod_name' => ['required'],
        //     'buy_date' => ['required']
        // ]);

        if ($request->hasFile('file')) {

            // $request->validate([
            //     'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            // ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('prod_image', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Products([
                "prod_name" => $request->input('prod_name'),
                "descr" => $request->input('descr'),
                'buy_date' => $request->input('buy_date'),
                'condition' => $request->input('condition'),
                'material' => $request->input('material'),
                // 'created_at' => $request->now(),
                "img" => $request->file->hashName()
            ]);

            $product->save(); // Finally, save the record.
        } else {
            $product = new Products([
                "prod_name" => $request->input('prod_name'),
                "descr" => $request->input('descr'),
                'buy_date' => $request->input('buy_date'),
                'condition' => $request->input('condition'),
                'material' => $request->input('material'),
                // 'created_at' => $request->now(),
            ]);
            $product->save();
        }
        return redirect()->route('products');
    }
}
