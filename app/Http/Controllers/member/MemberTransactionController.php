<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberTransactionController extends Controller
{
    public function index()
    {
        $transaction = UserPayment::where('user_id', Auth::user()->id)->where('product_id', "!=", 1)->where("status", "!=", "pending")->latest()->get();
        return view('pages.member.transaksi.index', compact('transaction'));
    }
}
