<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\UserWallet;
use Illuminate\Http\Request;

class MemberWithdrawController extends Controller
{
    public function update($id, Request $request)
    {
        $balance = UserWallet::where('user_id', $id)->first();

        if ($balance->current_balance >= $request->withdraw) {
            $total_balance = $balance->current_balance - $request->withdraw;
            $balance->update(
                [
                    'current_balance' => $total_balance,
                ]
            );
            return back();
        } else {
            return back()->with('message', 'Saldo Tidak Cukup Untuk Melakukan Pencairan Yang Anda Ajukan!');
        }
    }
}
