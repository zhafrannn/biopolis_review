<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class MemberProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $variants = Variant::all();
        return view('pages.member.produk.index', compact('product', 'variants'));
    }
}
