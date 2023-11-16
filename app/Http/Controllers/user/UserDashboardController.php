<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{



    public function index()
    {
        if (Auth::user()->role == 'member') {
            return redirect('/member/dashboard');
        }

        $product = Product::where('id', 1)->first();
        $user_payment = UserPayment::where('user_id', Auth::user()->id)->first();

        return view('pages.user.index', compact('product', "user_payment"));
    }
}
