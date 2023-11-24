<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use Illuminate\Http\Request;

class MemberWaitingCheckoutController extends Controller
{
    public function index()
    {
        $user_payment = UserPayment::where('status', "pending")->latest()->get();
        return view('pages.member.transaksi.menunggu-pembayaran.index', compact('user_payment'));
    }
}
