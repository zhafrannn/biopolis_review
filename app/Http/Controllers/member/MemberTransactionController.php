<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MemberTransactionController extends Controller
{
    public function index()
    {

        $currentDate = Carbon::now();

        $transaction = UserPayment::where('user_id', Auth::user()->id)->where("status", "!=", "pending")->latest()->get();

        $user_payment_failed = UserPayment::where('status', 'pending')->whereDate('valid_until', '<=', $currentDate)->latest()->get();

        return view('pages.member.transaksi.index', compact('transaction', 'user_payment_failed'));
    }
}
