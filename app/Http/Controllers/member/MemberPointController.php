<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\PointExchange;
use App\Models\Product;
use App\Models\User;
use App\Models\UserBiodata;
use App\Models\UserPayment;
use App\Models\UserWithdrawPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberPointController extends Controller
{
    public function index()
    {
        // ------------------------- INISIALIASASI ---------------------------------------------
        // REFERERALL CODE SAYA
        $my_code_refferal = Auth::user()->kode_referal;

        // POIN SAYA DARI PENDAFTARAN MEMBER YANG MENGGUNAKAN REFERAL CODE SAYA 
        $my_point_from_user_register_use_my_referal = 0;

        // POIN SAYA YANG DIDAPAT DARI MEMBER AFFILIATE REPEAT ORDER PRODUK
        $my_point_from_user_repeat_order = 0;

        // POIN SAYA YANG DI DAPAT KETIKA SAYA MEMBELI PRODUK
        $my_point_from_buy_a_product = 0;

        // --------------------------- LOGIC ----------------------
        // USER YANG MENGGUNAKAN REFERAL CODE SAYA
        $user_use_my_referal = UserBiodata::where('referal_use', $my_code_refferal)->get();

        // MEMBER YANG MENGGUNAKAN REFERAL CODE SAYA
        $member_use_my_referal = [];

        // DATA PENAMBAHAN POIN DARI USER PAYMENT 
        $income_point_data_register = [];
        $income_point_data_repeat_order = [];
        $income_point_data_buy_product = [];

        // CEK KE TABLE USER YANG ROLE NYA == MEMBER
        foreach ($user_use_my_referal as $item) {
            $member = User::where('id', $item->user_id)->first();
            if ($member->role == 'member') $member_use_my_referal[] = $member;
        }

        // CEK KE USER PAYMENT YANG MENGGUNAKAN REFERAL CODE SAYA DAN STATUS NYA = PAID
        foreach ($member_use_my_referal as $item) {

            // LOOPING PEMBAYARAN SETIAP USER YANG MENGGUNAKAN REFERAL CODE SAYA
            $user_payment = UserPayment::where('user_id', $item->id)->where('status', 'paid')->get();

            // CEK PRODUK YANG DI BELI APAKAH PRODUK REGISTER ATAU REPEAT ORDER
            foreach ($user_payment as $payment) {

                // PRODUK REGISTER
                // SETIAP USER YANG MENGGUNAKAN REFERAL CODE SAYA,MAKA SAYA MENDAPATKAN KOMISI 300 RIBU DAN 15 POIN
                if ($payment->product_id == 1) {
                    $my_point_from_user_register_use_my_referal += 15;
                    $income_point_data_register[] = [
                        "description" => "Pendaftaran Member " . $payment->user->name,
                        "date" => $payment->date,
                        "point" => 15,
                    ];
                }

                // PRODUK REPEAT ORDER
                // SETIAP USER YANG MENGGUNAKAN REFERAL CODE SAYA,MAKA SAYA MENDAPATKAN KOMISI 100RIBU DAN 5 POINT UNTUK SETIAP PAKETNYA
                if ($payment->product_id != 1) {
                    $product_repeat_order = Product::where('id', $payment->product_id)->first();
                    $product_packet_repeat_order = explode('-', $product_repeat_order->product_slug);
                    $my_point_from_user_repeat_order += 5 * intval($product_packet_repeat_order[0]);


                    $my_point_from_user = 5 * intval($product_packet_repeat_order[0]);
                    $income_point_data_repeat_order[] = [
                        "description" =>  $payment->user->name . " melakukan pembelian " . $product_repeat_order->product_name . " Biopolis",
                        "date" => $payment->date,
                        "point" => $my_point_from_user,
                    ];
                }
            }
        }



        // HITUNG POINT YANG SAYA DAPAT KETIKA SAYA MEMBELI PRODUCT
        $my_product_buy = UserPayment::where('user_id', Auth::user()->id)->where('status', "paid")->get();
        foreach ($my_product_buy as $item) {
            $product = Product::where('id', $item->product_id)->first();
            if ($product) {

                if ($product->id != 1) {
                    $my_product_packet_buy = explode('-', $product->product_slug);
                    $my_point_from_buy_a_product += $product->point;

                    $income_point_data_buy_product[] = [
                        "description" =>  "Kamu mendapatkan point dari pembelian produk " . $product->product_name . ' Propolis Biopolis',
                        "date" => $payment->date,
                        "point" => $product->point,
                    ];
                }
            }
        }

        $income_data = array_merge($income_point_data_register, $income_point_data_repeat_order, $income_point_data_buy_product);
        usort($income_data, function ($a, $b) {
            return strtotime($a['date']) - strtotime($b['date']);
        });
        $income_data = array_reverse($income_data);

        $data = [
            "my_point_from_user_register_use_my_referal" => $my_point_from_user_register_use_my_referal,
            "my_point_from_user_repeat_order" => $my_point_from_user_repeat_order,
            "my_point_from_buy_a_product" => $my_point_from_buy_a_product,
            "income_data" => $income_data,
        ];
        $point_exchange = PointExchange::all();
        return view('pages.member.poin.index', compact('data', 'point_exchange'));
    }

    public function store(Request $request)
    {
        $point_exchange = PointExchange::where('id', $request->point_exchange_id)->first();

        Auth::user()->user_wallet->update([
            'current_point' => Auth::user()->user_wallet->current_point - $point_exchange->point,
        ]);

        $withdraw_code = "WD" . date('YmdHis') . Auth::user()->id;

        UserWithdrawPoint::create([
            "user_id" => Auth::user()->id,
            "point_exchange_id" => $point_exchange->id,
            "withdraw_code" => $withdraw_code,
        ]);

        Notification::create([
            "user_id" => Auth::user()->id,
            "description" => "Pengajuan penukaran poin di proses dan menunggu konfirmasi",
        ]);

        return back();
    }
}
