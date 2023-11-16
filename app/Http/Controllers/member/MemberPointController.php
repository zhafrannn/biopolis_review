<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\UserBiodata;
use App\Models\UserPayment;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberPointController extends Controller
{
    public function index()
    {
        $user_target = UserBiodata::where('referal_use', Auth::user()->kode_referal)->get();

        $data = [];
        $payment_user_use = [];
        $point_register = 0;
        $point_repeat_order = 0;
        $point_buy_product = 0;

        // dd('sad');

        foreach ($user_target as $item) {
            $data_payment = UserPayment::where('user_id', $item->user_id)->where('status', 'paid')->get();
            foreach ($data_payment as $item_payment) {
                $data[] = $item_payment;
            }
        }

        foreach ($data as $item) {
            if ($item->product_id == 1) {
                $payment_user_use[] = $item;
                $point_register += 15;
            } else {
                $product_code = explode('-', $item->payment_code);
                $product = Product::where('product_code', $product_code[0])->first();
                $multile_point = explode(' ', $product->product_name);
                $point_repeat_order += $multile_point[0] * 5;
                $payment_user_use[] = $item;
            }
        }

        $res = [
            "user_id_login" => Auth::user()->id,
            "kode_refferal" => Auth::user()->kode_referal,
            "user_target_yang_menggunakan_refferal" => $user_target,
            "payment_user_use" => $payment_user_use,
            "point_register" => $point_register,
            "point_repeat_order" => $point_repeat_order,
        ];

        // dd([
        //     "user_id_login" => Auth::user()->id,
        //     "kode_refferal" => Auth::user()->kode_referal,
        //     "user_target_yang_menggunakan_refferal" => $user_target,
        //     "payment_user_use" => $payment_user_use,
        //     "point_register" => $point_register,
        //     "point_repeat_order" => $point_repeat_order,
        // ]);
        return view('pages.member.poin.index', compact('res'));
    }
}