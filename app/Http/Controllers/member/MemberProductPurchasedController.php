<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberProductPurchasedController extends Controller
{
    public function index()
    {
        $users = UserPayment::where('user_id', Auth::user()->id)->where('status', 'paid')->with('product')->get();

        return view('pages.member.info-produk.index', compact('users'));
    }
}
