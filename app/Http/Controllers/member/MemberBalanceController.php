<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Product;
use App\Models\User;
use App\Models\UserBiodata;
use App\Models\UserPayment;
use App\Models\UserWallet;
use App\Models\UserWithdrawBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MemberBalanceController extends Controller
{
    public function index()
    {
        // ------------------------- INISIALIASASI ---------------------------------------------
        // REFERERALL CODE SAYA
        $my_code_refferal = Auth::user()->kode_referal;

        // POIN SAYA DARI PENDAFTARAN MEMBER YANG MENGGUNAKAN REFERAL CODE SAYA 
        $my_balance_from_user_register_use_my_referal = 0;

        // POIN SAYA YANG DIDAPAT DARI MEMBER AFFILIATE REPEAT ORDER PRODUK
        $my_balance_from_user_repeat_order = 0;

        // POIN SAYA YANG DI DAPAT KETIKA SAYA MEMBELI PRODUK
        $my_point_from_buy_a_product = 0;


        // --------------------------- LOGIC ----------------------
        // USER YANG MENGGUNAKAN REFERAL CODE SAYA
        $user_use_my_referal = UserBiodata::where('referal_use', $my_code_refferal)->get();

        // MEMBER YANG MENGGUNAKAN REFERAL CODE SAYA
        $member_use_my_referal = [];

        // DATA PENAMBAHAN BALANCE DARI USER PAYMENT 
        $income_balance_data_register = [];
        $income_balance_data_repeat_order = [];


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
                    $income_balance_data_register[] = [
                        "description" => "Pendaftaran Member " . $payment->user->name,
                        "date" => $payment->date,
                        "balance" => 300000,
                    ];
                }


                // PRODUK REPEAT ORDER
                // SETIAP USER YANG MENGGUNAKAN REFERAL CODE SAYA,MAKA SAYA MENDAPATKAN KOMISI 100RIBU DAN 5 POINT UNTUK SETIAP PAKETNYA
                if ($payment->product_id != 1) {
                    $product_repeat_order = Product::where('id', $payment->product_id)->first();
                    $product_packet_repeat_order = explode('-', $product_repeat_order->product_slug);
                    $my_balance_from_user_repeat_order += 100000 * intval($product_packet_repeat_order[0]);

                    $my_balance_from_user = 100000 * intval($product_packet_repeat_order[0]);
                    $income_balance_data_repeat_order[] = [
                        "description" =>  $payment->user->name . " melakukan pembelian " . $product_repeat_order->product_name . " Biopolis",
                        "date" => $payment->date,
                        "balance" => $my_balance_from_user,
                    ];
                }
            }
        }

        $income_data = array_merge($income_balance_data_register, $income_balance_data_repeat_order);
        usort($income_data, function ($a, $b) {
            return strtotime($a['date']) - strtotime($b['date']);
        });
        $income_data = array_reverse($income_data);


        $data = [
            "my_balance_from_user_register_use_my_referal" => $my_balance_from_user_register_use_my_referal,
            "my_balance_from_user_repeat_order" => $my_balance_from_user_repeat_order,
            "income_data" => $income_data,
        ];

        $user_balance = UserWithdrawBalance::where("user_id", Auth::user()->id)->latest()->get();
        return view('pages.member.withdraw-affiliate.index', compact('user_balance', 'data'));
    }

    public function store(Request $request)
    {
        $balance = UserWallet::where('user_id', Auth::user()->id)->first();
        
        if ($balance->current_balance >= $request->total_exchange_balance) {
            $withdraw_code = "WDB" . date('YmdHis') . Auth::user()->id;

            UserWithdrawBalance::create([
                "user_id" => Auth::user()->id,
                "withdraw_total_balance" => $request->total_exchange_balance,
                "withdraw_code" => $withdraw_code,
            ]);
    
            Notification::create([
                "user_id" => Auth::user()->id,
                "description" => "Pengajuan penukaran uang di proses dan menunggu konfirmasi",
            ]);

            $total_balance = $balance->current_balance - $request->total_exchange_balance;

            $balance->update(
                [
                    'current_balance' => $total_balance,
                ]
            );
            toast('Pengajuan Pencairan Saldo Diajukan!', 'success');
            
            return back();
        } 
        else {
            toast('Saldo Anda Tidak Cukup!', 'error');
            return back();
        }
    }
}
