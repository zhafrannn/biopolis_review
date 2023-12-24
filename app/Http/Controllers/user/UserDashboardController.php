<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserDashboardController extends Controller
{


    public function index()
    {
        if (Auth::user()->role == 'member') {
            return redirect('/member/dashboard');
        }

        if (Auth::user()->role == 'admin') {
            return redirect('/admin');
        }
        
        $currentTime = Carbon::now();
        $product = Product::where('id', 1)->first();
       
        $user_payment = UserPayment::where('user_id', Auth::user()->id)
            ->where('valid_until', '>=', $currentTime)
            ->first();

        return view('pages.user.index', compact('product', "user_payment"));
    }
}
