<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MemberWaitingCheckoutController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now();

        $user_payment = UserPayment::where('status', 'pending')->whereDate('valid_until', '>=', $currentDate)->latest()->get();

        return view('pages.member.transaksi.menunggu-pembayaran.index', compact('user_payment',));
    }
}
