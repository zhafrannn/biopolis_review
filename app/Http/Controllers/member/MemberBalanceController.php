<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\UserWithdrawBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberBalanceController extends Controller
{
    public function index()
    {
        $user_balance = UserWithdrawBalance::where("user_id", Auth::user()->id)->latest()->get();
        return view('pages.member.withdraw-affiliate.index', compact('user_balance'));
    }

    public function store(Request $request)
    {
        $withdraw_code = "WDB" . date('YmdHis') . Auth::user()->id;
        UserWithdrawBalance::create([
            "user_id" => Auth::user()->id,
            "withdraw_total_balance" => $request->total_exchange_balance,
            "withdraw_code" => $withdraw_code,
        ]);

        Auth::user()->user_wallet->update([
            'current_balance' => Auth::user()->user_wallet->current_balance - $request->total_exchange_balance,
        ]);

        Notification::create([
            "user_id" => Auth::user()->id,
            "description" => "Pengajuan penukaran uang di proses dan menunggu konfirmasi",
        ]);

        return back();
    }
}
