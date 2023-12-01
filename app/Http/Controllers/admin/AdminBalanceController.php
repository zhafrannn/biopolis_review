<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserBiodata;
use App\Models\UserWithdrawBalance;
use Illuminate\Http\Request;

class AdminBalanceController extends Controller
{
    public function index()
    {
        $withdraws = UserWithdrawBalance::where('status', 'pending')->with('user')->get();
        $users = [];
        foreach ($withdraws as $withdraw) {
            $users[] = UserBiodata::where('user_id', $withdraw->user_id)->first();
        }
        return view('pages.admin.pengajuan-pencairan.index', compact('withdraws'));
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
