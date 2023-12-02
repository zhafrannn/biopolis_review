<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\UserBiodata;
use App\Models\UserPayment;
use DateTime;
use Illuminate\Support\Facades\Auth;

class MemberDashboardController extends Controller
{


    public function index()
    {
        if (Auth::user()->role == 'user') {
            return redirect('/user/dashboard');
        }
        // --------------------------- INISIALISASI ----------------------
        // GRAFIK PENDAPATAN KOMISI
        $chart_data = [
            ["month_name" => "Jan", "total" => 0],
            ["month_name" => "Feb", "total" => 0],
            ["month_name" => "Mar", "total" => 0],
            ["month_name" => "Apr", "total" => 0],
            ["month_name" => "Mei", "total" => 0],
            ["month_name" => "Jun", "total" => 0],
            ["month_name" => "Jul", "total" => 0],
            ["month_name" => "Aug", "total" => 0],
            ["month_name" => "Sep", "total" => 0],
            ["month_name" => "Oct", "total" => 0],
            ["month_name" => "Nov", "total" => 0],
            ["month_name" => "Dec", "total" => 0],
        ];

        // REFERERALL CODE SAYA
        $my_code_refferal = Auth::user()->kode_referal;

        // POIN SAYA DARI PENDAFTARAN MEMBER YANG MENGGUNAKAN REFERAL CODE SAYA 
        $my_point_from_user_register_use_my_referal = 0;

        // POIN SAYA YANG DIDAPAT DARI MEMBER AFFILIATE REPEAT ORDER PRODUK
        $my_point_from_user_repeat_order = 0;


        // JUMLAH MEMBER YANG SUDAH MENGGUNAKAN REFERAL CODE SAYA
        $my_total_referal_use = 0;

        // POIN SAYA YANG DI DAPAT KETIKA SAYA MEMBELI PRODUK
        $my_point_from_buy_a_product = 0;

        // KOMISI/BALANCE SAYA DARI MEMBER YANG MENGGUNAKAN REFERAL CODE SAYA 
        $my_balance_from_user_register_use_my_referal = 0;

        // KOMISI/BALANACE SAYA YANG DIDAPAT DARI MEMBER AFFILIATE REPEAT ORDER PRODUK
        $my_balance_from_user_repeat_order = 0;

        // JUMLAH PAKET YANG TELAH SAYA BELI
        $my_total_packet_buy_a_product = 0;

        // NILAI RUPIAH DARI SELURUH JUMLAH PAKET YANG TELAH SAYA BELI
        $my_total_packet_buy_a_product_price = 0;


        // --------------------------- LOGIC ----------------------
        // USER YANG MENGGUNAKAN REFERAL CODE SAYA
        $user_use_my_referal = UserBiodata::where('referal_use', $my_code_refferal)->get();

        // MEMBER YANG MENGGUNAKAN REFERAL CODE SAYA
        $member_use_my_referal = [];

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
                    $my_balance_from_user_register_use_my_referal += 300000;
                    $my_point_from_user_register_use_my_referal += 15;

                    // Tanggal yang diberikan
                    $tanggal = $payment->date;
                    // Ubah tanggal menjadi format DateTime
                    $tanggal_dt = new DateTime($tanggal);
                    // Ambil nama bulan dari tanggal yang diberikan
                    $bulan_tanggal = $tanggal_dt->format('M');

                    // Looping untuk mencari bulan yang sesuai dengan bulan dari tanggal
                    foreach ($chart_data as &$chartItem) {
                        if ($chartItem['month_name'] === $bulan_tanggal) {
                            // Tambahkan nilai total sesuai kebutuhan Anda, misalnya 1
                            $chartItem['total'] += 300000;
                            break; // Keluar dari loop karena sudah menemukan bulan yang sesuai
                        }
                    }
                }

                // PRODUK REPEAT ORDER
                // SETIAP USER YANG MENGGUNAKAN REFERAL CODE SAYA,MAKA SAYA MENDAPATKAN KOMISI 100RIBU DAN 5 POINT UNTUK SETIAP PAKETNYA
                if ($payment->product_id != 1) {
                    $product = Product::where('id', $payment->product_id)->first();
                    $product_packet = explode('-', $product->product_slug);

                    $my_balance_from_user_repeat_order += 100000 * intval($product_packet[0]);
                    $my_point_from_user_repeat_order += 5 * intval($product_packet[0]);

                    // Tanggal yang diberikan
                    $tanggal = $payment->date;
                    // Ubah tanggal menjadi format DateTime
                    $tanggal_dt = new DateTime($tanggal);
                    // Ambil nama bulan dari tanggal yang diberikan
                    $bulan_tanggal = $tanggal_dt->format('M');

                    // Looping untuk mencari bulan yang sesuai dengan bulan dari tanggal
                    foreach ($chart_data as &$chartItem) {
                        if ($chartItem['month_name'] === $bulan_tanggal) {
                            // Tambahkan nilai total sesuai kebutuhan Anda, misalnya 1
                            $chartItem['total'] += 100000 * intval($product_packet[0]);
                            break; // Keluar dari loop karena sudah menemukan bulan yang sesuai
                        }
                    }
                }
            }
        }

        // HITUNG POINT YANG SAYA DAPAT KETIKA SAYA MEMBELI PRODUCT
        $my_product_buy = UserPayment::where('user_id', Auth::user()->id)->where('status', "paid")->get();

        foreach ($my_product_buy as $item) {
            $product = Product::where('id', $item->product_id)->first();
            if ($product) {

                if ($product->id == 1) {
                    $my_total_packet_buy_a_product += 1;
                    $my_total_packet_buy_a_product_price += $product->price;
                }

                if ($product->id != 1) {
                    $my_product_packet_buy = explode('-', $product->product_slug);
                    $my_total_packet_buy_a_product += intval($my_product_packet_buy[0]);
                    $my_point_from_buy_a_product += $product->point;
                    $my_total_packet_buy_a_product_price += $product->price;
                }
            }
        }


        $data = [
            "my_point_from_user_register_use_my_referal" => $my_point_from_user_register_use_my_referal,
            "my_point_from_user_repeat_order" => $my_point_from_user_repeat_order,
            "my_balance_from_user_repeat_order" => $my_balance_from_user_repeat_order,
            "my_total_referal_use" => count($member_use_my_referal),
            "my_point_from_buy_a_product" => $my_point_from_buy_a_product,
            "my_balance_from_user_register_use_my_referal" => $my_balance_from_user_register_use_my_referal,
            "my_total_packet_buy_a_product" => $my_total_packet_buy_a_product,
            "my_total_packet_buy_a_product_price" => $my_total_packet_buy_a_product_price,
        ];

        // dd($chart_data);

        return view('pages.member.dashboard.index', compact('data', 'chart_data'));
    }
}
