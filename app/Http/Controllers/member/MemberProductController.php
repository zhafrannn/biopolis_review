<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MemberProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('pages.member.produk.index', compact('product'));
    }
}
