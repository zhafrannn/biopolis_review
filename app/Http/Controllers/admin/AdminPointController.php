<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserWithdrawPoint;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminPointController extends Controller
{
    public function index()
    {

        $user_point_exchange = UserWithdrawPoint::latest()->get();
        return view('pages.admin.pengajuan-penukaran-poin.index', compact('user_point_exchange'));
    }

    public function store(Request $request)
    {
        $user_withdraw = UserWithdrawPoint::where('id', $request->user_withdraw_point_id)->first();
        $user_withdraw->update([
            "status" => "completed"
        ]);
        Notification::create([
            "user_id" => $user_withdraw->user->id,
            "description" => "Pengajuan withdraw point anda dengan kode " . $user_withdraw->withdraw_code . " berhasil",
        ]);

        return back();
    }

    public function delete(Request $request)
    {

        $user_withdraw = UserWithdrawPoint::where('id', $request->user_withdraw_point_id)->first();
        $point = $user_withdraw->point_exchange->point;
        $user_wallet = $user_withdraw->user->user_wallet;
        $user_wallet->update([
            "current_point" => $user_wallet->current_point + $point,
        ]);
        Notification::create([
            "user_id" => $user_withdraw->user->id,
            "description" => "Pengajuan withdraw point anda dengan kode " . $user_withdraw->withdraw_code . " telah dibatalkan",
        ]);
        $user_withdraw->delete();
        return back();
    }
}
