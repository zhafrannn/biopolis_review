<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Product;
use App\Models\User;
use App\Models\UserBiodata;
use App\Models\UserPayment;
use App\Models\Notification;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Else_;
use Xendit\Invoice\InvoiceApi;
use Xendit\Configuration;

class PaymentController extends Controller
{

    public function __construct()
    {
        Configuration::setXenditKey("xnd_development_tbhRC1voL5s6wNzENJOKYKOEGX60D8wJ3vvFGbiW9NBHgG4r7mpB5C2JFc3xrt");
    }
    public function create_payment($create_invoice_request)
    {
        // ------------------------- example format create invoice to xendit -----------------------
        // $create_invoice_request = [
        //     "external_id" => 'P' . "-" . "1031" . '-' . $date->format('Ymd-His'),
        //     "description" => "Test Invoice",
        //     "amount" => 40000,
        //     "invoice_duration" => 86400,
        //     "currency" => "IDR",
        //     "reminder_time" => 1,
        //     "should_send_email" => true,
        //     "payer_email" => "hanggitya86@gmail.com",
        //     "customer" => [
        //         "given_names" => "nama_leng",
        //     ],
        // ];
        $apiInstance = new InvoiceApi();
        try {
            $createInvoice = $apiInstance->createInvoice($create_invoice_request);
            return $createInvoice;
        } catch (\Xendit\XenditSdkException $e) {
            echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
            echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
        }

        return "not found";
    }

    public function webhook_payment(Request $request)
    {
        // Pakai method Xendit ambil ke user payment berdasarkan payment code
        $apiInstance = new InvoiceApi();
        $xendit_request = $apiInstance->getInvoiceById($request->id);
        $payment = UserPayment::where('payment_code', $xendit_request['external_id'])->first();
        $buyer = User::where('id', $payment->user_id)->first();
        if ($payment->status == 'paid') {
            return response()->json(['data' => 'Pembayaran Sudah dilakukan']);
        }
        // return response()->json(['data' => $xendit_request]);

        if (strtolower($xendit_request['status']) == 'settled') {
            $payment_code = explode('-', $xendit_request['external_id']);
            $payment_code = $payment_code[0];

            $target_refferal = UserBiodata::where('user_id', $payment->user_id)->first();
            $user_target = User::where('kode_referal', $target_refferal->referal_use)->first();
            $wallet_user_target = UserWallet::where('user_id', $user_target->id)->first();
            // return response()->json(['data' => $wallet_user_target]);

            if ($payment_code == 'P00') {
                // Case User Register
                $wallet_user_target->update([
                    "current_point" => $wallet_user_target->current_point + 15,
                    "current_balance" => $wallet_user_target->current_balance + 300000,
                    "total_point" => $wallet_user_target->total_point + 15,
                    "total_refferal" => $wallet_user_target->total_refferal + 1,
                    "total_balance" => $wallet_user_target->total_balance + 300000,
                ]);

                UserWallet::create([
                    "user_id" => $payment->user_id
                ]);
                $user_change_role_to_member = User::where('id', $payment->user_id)->first();
                $user_change_role_to_member->update([
                    "role" => "member"
                ]);

                Notification::create([
                    "user_id" => $user_target->id,
                    "description" => "Kode Referalmu telah digunakan " . $buyer->name,
                ]);
                Notification::create([
                    "user_id" => $payment->user_id,
                    "description" => "Selamat telah menjadi mitra biopolis propolis",
                ]);
            } else {
                // Case User Repeat Order
                // Setiap 1 Paket Nambah 5 Point + 100.000 untuk user target
                $product = Product::where('product_code', $payment_code)->first();
                $multile_product = explode(' ', $product->product_name);
                $bonus_balance_target = 100000 * $multile_product[0];
                $bonus_point_target = 5 * $multile_product[0];
                $bonus_point_buyer = $product->point;
                // return response()->json(["data" => $user_target]);
                // ------------------- Untuk User Target -----------------
                $wallet_user_target->update([
                    "current_point" => $wallet_user_target->current_point + $bonus_point_target,
                    "current_balance" => $wallet_user_target->current_balance + $bonus_balance_target,
                    "total_point" => $wallet_user_target->total_point + $bonus_point_target,
                    "total_balance" => $wallet_user_target->total_balance + $bonus_balance_target,
                ]);
                // ---------- Untuk User yang membeli Produk -----------------
                $wallet_user_buyer = UserWallet::where('user_id', $payment->user_id)->first();
                $wallet_user_buyer->update([
                    "current_point" => $wallet_user_buyer->current_point + $bonus_point_buyer,
                    "total_point" => $wallet_user_buyer->total_point + $bonus_point_buyer,
                ]);

                Notification::create([
                    "user_id" => $user_target->id,
                    "description" => "Kamu mendapatkan " . $bonus_point_target . " poin dan " . 'Rp.' . number_format($bonus_balance_target) . " dari" . $buyer->name,
                ]);
                Notification::create([
                    "user_id" => $payment->user_id,
                    "description" => "Kamu mendapatkan " . $product->point . " dari pembelian produk",
                ]);
            }
            $payment->status = 'paid';
            $payment->shipping_status = 'packing';
            $payment->save();



            $data = [
                "total_pembayaran" => $payment->total_payment,
                "tanggal" => $payment->date,
                "nama_produk" => $payment->product->name,
                "pembelian" => $payment->product->description,
                "kode_pembayaran" => $payment->payment_code,

            ];

            $email = $payment->user->email;
            Mail::to("zhafran858@gmail.com")->send(new SendEmail($data));
        }

        return response()->json(["data" => "Pembayaran Selesai"]);
    }
}
