<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.admin.produk.index', compact('products'));
    }

    public function update($id, Request $request)
    {
        $variant = Product::where('id', $id)->first();
        $variant->update(
            [
                'product_name' => $request->product_name,
                // 'image' => $request->image,
                'description' => $request->description,
                'weight' => $request->weight,
                'point' => $request->point,
                'price' => $request->price,
            ]
        );
        return back();
    }
}
