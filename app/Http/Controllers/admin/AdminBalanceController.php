<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailBalance;
use App\Models\Notification;
use App\Models\UserBiodata;
use App\Models\UserWithdrawBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $user_withdraw = UserWithdrawBalance::where('id', $request->user_withdraw_balance_id)->with(['user.user_biodata'])->first();

        $user_withdraw->update([
            "status" => "completed"
        ]);

        Notification::create([
            "user_id" => $user_withdraw->user_id,
            "description" => "Pengajuan withdraw komisi anda dengan kode " . $user_withdraw->withdraw_code . " berhasil",
        ]);


        $email = [
            "to" => $user_withdraw->user->email,
            "title" => "Terima kasih telah bermitra dengan kami!",
            "kode_pencairan" => $user_withdraw->withdraw_code,
            "tanggal" => $user_withdraw->created_at,
            "total_pencairan" => $user_withdraw->withdraw_total_balance,
            "keterangan" => "Pencairan komisi senilai " . "Rp." . number_format($user_withdraw->withdraw_total_balance) . ",-",
            "rekening" => $user_withdraw->user->user_biodata->no_rekening . " " . "(" . strtoupper($user_withdraw->user->user_biodata->nama_bank) . ")",
            "status" => "Success",
        ];
        Mail::to($email['to'])->send(new SendEmailBalance($email));

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
