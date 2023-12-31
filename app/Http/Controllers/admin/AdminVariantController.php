<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        toast('Berhasil Menambahkan Produk Baru!', 'success');

        return back();
    }

    public function update($id, Request $request)
    {

        $variant = Variant::where('id', $id)->first();
        $variant->update(
            [
                'variant_name' => $request->variant_name,
                'variant_image' => $request->variant_image,
                'description' => $request->description,
                'stock' => $request->stock,
            ]
        );
        toast('Berhasil Melakukan Perubahan Pada Produk' . $request->variant_name . '!', 'success');
        return back();
    }

    public function destroy($id)
    {
        Variant::where('id', $id)->delete();

        toast('Berhasil menghapus Produk!', 'error');

        return back();
    }
}
