<?php

namespace App\Http\Controllers\member;

use DateTime;
use App\Models\Product;
use App\Models\UserWallet;
use App\Models\UserPayment;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MemberDashboardController extends Controller
{


    public function index()
    {
        if (Auth::user()->role == 'user') {
            return redirect('/user/dashboard');
        }

        $notification = Notification::where('user_id', Auth::user()->id)->latest()->get();
        $user_wallet = UserWallet::where('user_id', Auth::user()->id)->first();
        $user_buy_product = UserPayment::where('user_id', Auth::user()->id)->where('status', 'paid')->get();
        $point_user_buy_product = 0;
        $user_total_packet_buy = 0;
        $packet_user_total_week = 0;
        $packet_user_total_month = 0;
        $packet_user_total_year = 0;
        $user_total_buy_payment = 0;
        $user_total_buy_packet_fix = 0;

        $product_user_buy = UserPayment::where('user_id', Auth::user()->id)->where('status', "paid")->where('product_id', "!=", 1)->get();

        $user_total_payment_product = UserPayment::where('user_id', Auth::user()->id)->where('status', "paid")->get();

        foreach ($user_total_payment_product as $item) {
            $user_total_buy_payment += $item->total_payment;
        }

        foreach ($user_total_payment_product as $item) {
            $user_buy_product_point = Product::where('id', $item->product_id)->first();
            $point_user_buy_product += $user_buy_product_point->point;

            if ($item->product_id == 1) {
                $user_total_buy_packet_fix += 1;
            } else {
                $product_fix = Product::where('id', $item->product_id)->first();
                $product_packet_total_fix = explode(' ', $product_fix->product_name);
                $user_total_buy_packet_fix += intval($product_packet_total_fix[0]);
            }
        }

        foreach ($user_buy_product as $item) {
            $payment_code = explode('-', $item->payment_code);


            if ($payment_code[0] != "P00") {
                $product = Product::where('id', $item->product_id)->first();
                $product_packet_total = explode(' ', $product->product_name);
                $user_total_packet_buy += intval($product_packet_total[0]);

                $dateString = $item->date; // Tanggal yang ingin dicek
                $givenDate = new DateTime($dateString); // Buat objek DateTime dari string tanggal yang diberikan
                $today = new DateTime(); // Buat objek DateTime untuk tanggal hari ini

                // Mendapatkan tahun, bulan, dan hari dari masing-masing tanggal
                $givenYear = $givenDate->format('Y');
                $givenMonth = $givenDate->format('m');
                $givenWeek = $givenDate->format('W');
                $givenDay = $givenDate->format('d');

                $todayYear = $today->format('Y');
                $todayMonth = $today->format('m');
                $todayWeek = $today->format('W');
                $todayDay = $today->format('d');

                // Cek jika tanggal sama dengan hari ini, bulan ini, dan tahun ini
                $isSameDay = $givenDay === $todayDay;
                $isSameWeek = $givenWeek === $todayWeek;
                $isSameMonth = $givenMonth === $todayMonth;
                $isSameYear = $givenYear === $todayYear;

                // 
                if ($isSameYear) {
                    $packet_user_total_year += intval($product_packet_total[0]);
                    if ($isSameMonth) {
                        $packet_user_total_month += intval($product_packet_total[0]);
                        if ($isSameWeek) {
                            $packet_user_total_week += intval($product_packet_total[0]);
                        }
                    }
                }
                // 
            }
        }

        $data = [
            "user" => Auth::user(),
            "point_user_buy_product" => $point_user_buy_product,
            "user_total_buy_packet" => $user_total_buy_packet_fix . " Paket",
            "user_total_buy_payment" => $user_total_buy_payment,
            "refferal_point" => [
                "current_point" => $user_wallet->current_point,
                "current_balance" => $user_wallet->current_balance,
                "total_point" => $user_wallet->total_point,
                "total_balance" => $user_wallet->total_balance,
                "total_refferal" => $user_wallet->total_refferal,
            ],
            "notification" => $notification,
            "affiliate_graphic" => [
                "week" => [
                    "label" => ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"],
                    "data" => ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"],
                ],
                "month" => [
                    "label" => ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"],
                    "data" => ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"],
                ],
                "yearly" => [
                    "label" => ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"],
                    "data" => ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"],
                ],
            ],
            "user_total_packet" => [
                "weekly" => $packet_user_total_week,
                "monthly" => $packet_user_total_month,
                "yearly" => $packet_user_total_year,
            ],
        ];

        // dd($data);

        return view('pages.member.dashboard.index', compact('data'));
    }
}
