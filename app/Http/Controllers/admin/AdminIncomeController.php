<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UserPayment;
use Illuminate\Http\Request;

class AdminIncomeController extends Controller
{
    public function index()
    {
        $paids = UserPayment::where('status', 'paid')->with('user')->with('product')->get();
        $total_sale = 0;
        foreach ($paids as $paid) {
            $product = Product::where('id', $paid->product_id)->first();

            $total_sale += $product->price;
        }

        return view('pages.admin.penjualan.index', compact('total_sale', 'paids'));
    }
}
