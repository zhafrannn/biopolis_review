<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use Illuminate\Http\Request;

class AdminVariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();

        return view('pages.admin.variant.index', compact('variants'));
    }
    public function store(Request $request)
    {
        Variant::create([
            'variant_name' => $request->variant_name,
            // 'variant_image' => $request->variant_image,
            'description' => $request->description,
            'stock' => $request->stock
        ]);

        return back();
    }

    public function update($id, Request $request)
    {
        $variant = Variant::where('id', $id)->first();
        $variant->update(
            [
                'variant_name' => $request->variant_name,
                // 'variant_image' => $request->variant_image,
                'description' => $request->description,
                'stock' => $request->stock,
            ]
        );
        return back();
    }

    public function destroy($id)
    {
        Variant::where('id', $id)->delete();

        return back();
    }
}
