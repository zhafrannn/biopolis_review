<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{


    public function index()
    {
        $user = Auth::user(); // Mengambil informasi user yang sedang login
        // Cek apakah pengguna sudah login dan perannya adalah 'admin'
        if (!$user || $user->role !== 'admin') {
            return abort(403); // Redirect ke halaman login jika bukan admin
        }


        $paids = UserPayment::where('status', 'paid')->get();
        $total_sale = 0;
        foreach ($paids as $paid) {
            $product = Product::where('id', $paid->product_id)->first();

            $total_sale += $product->price;
        }

        $members = User::where('role', 'member')->get();
        $total_member = 0;
        foreach ($members as $member) {
            $total_member += 1;
        }

        return view('pages.admin.dashboard.index', compact('total_sale', 'total_member'));
    }
}
