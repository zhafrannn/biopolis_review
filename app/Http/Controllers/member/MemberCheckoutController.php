<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MemberCheckoutController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        if ($product) {
            return view('pages.member.produk.checkout.index', compact('product'));
        }

        return abort(404);
    }
}
