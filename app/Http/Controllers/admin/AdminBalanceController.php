<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\UserBiodata;
use App\Models\UserWithdrawBalance;
use Illuminate\Http\Request;

class AdminBalanceController extends Controller
{
    public function index()
    {
        $withdraws = UserWithdrawBalance::with('user')->latest()->get();
        $users = [];

        foreach ($withdraws as $withdraw) {
            $users[] = UserBiodata::where('user_id', $withdraw->user_id)->first();
        }
        return view('pages.admin.pengajuan-pencairan.index', compact('withdraws'));
    }

    public function store(Request $request)
    {
        $user_withdraw = UserWithdrawBalance::where('id', $request->user_withdraw_balance_id)->first();

        $user_withdraw->update([
            "status" => "completed"
        ]);

        Notification::create([
            "user_id" => $user_withdraw->user_id,
            "description" => "Pengajuan withdraw komisi anda dengan kode " . $user_withdraw->withdraw_code . " berhasil",
        ]);

        return back();
    }

    public function delete(Request $request)
    {

        $user_withdraw = UserWithdrawBalance::where('id', $request->user_withdraw_point_id)->first();
        $balance = $user_withdraw->withdraw_total_balance;
        dd($balance);
        $user_wallet = $user_withdraw->user->user_wallet;
        $user_wallet->update([
            "current_balance" => $user_wallet->current_balance + $balance,
        ]);
        Notification::create([
            "user_id" => $user_withdraw->user_id,
            "description" => "Pengajuan withdraw point anda dengan kode " . $user_withdraw->withdraw_code . " telah dibatalkan",
        ]);
        $user_withdraw->delete();
        return back();
    }

    public function update($id, Request $request)
    {
        $banks = UserWithdrawBalance::where('id', $id)->first();
        $banks->update([
            'status' => 'completed'
        ]);

        return back();
    }
}
