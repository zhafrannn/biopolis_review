<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShippingController;
use App\Models\Product;
use App\Models\UserPayment;
use App\Models\UserPaymentVariant;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class MemberPaymentController extends Controller
{
    public function store(Request $request)
    {

        try {

            $product = Product::where('id', $request->product_id)->first();
            $user_total_check = 0;
            $variants = $request->variant;

            // Cek Total Yang di inputin user
            foreach ($variants as $variant) {
                $user_total_check += intval($variant["value"]);
            }

            if ($user_total_check != intval($product->packet_quantity)) {
                toast('Jumlah Produk Tidak Sesuai!', 'error');
                return back();
            }

            // dd("disini", $request->all(), $variants, $user_total_check, $user_total_check >= $product->packet_quantity + 1 ? "gk boleh" : "boleh");


            $shipping = new ShippingController();

            if ($request->shipping_type == 'on_send') {
                $shipping_cost = $shipping->get_shipping_cost_by_city($request);
            } else {
                $shipping_cost = 0;
            }

            $total_cost = $product->price + $shipping_cost;

            $date = now();
            $create_invoice_request = [
                "external_id" => $product->product_code . "-" . Auth::user()->id . '-' . $date->format('Ymd-His'),
                "description" => $product->description,
                "amount" => $total_cost,
                "invoice_duration" => 86400,
                "currency" => "IDR",
                "reminder_time" => 1,
                "should_send_email" => true,
                "payer_email" => Auth::user()->email,
                "customer" => [
                    "given_names" => Auth::user()->name,
                ],
            ];



            $payment = new PaymentController();
            $payment_invoice = $payment->create_payment($create_invoice_request);

            $valid_until = Carbon::now();
            $valid_until = $valid_until->addDay();

            $shipping_type = ($request->shipping_type == 'on_send') ? 'jne' : null;


            $user_payment_data = UserPayment::create([
                "user_id" => Auth::user()->id,
                "product_id" => $product->id,
                "payment_code" => $product->product_code . "-" . Auth::user()->id . '-' . $date->format('Ymd-His'),
                "total_payment" => $total_cost,
                "date" =>  $payment_invoice['expiry_date'],
                "valid_until" =>  $valid_until,
                "status" => "pending",
                "redirect_url" => $payment_invoice['invoice_url'],
                "shipping_type" => $request->shipping_type,
                "shipping_courier" => $shipping_type
            ]);

            foreach ($variants as $variant) {
                if (intval($variant['value'] !== 0)) {
                    UserPaymentVariant::create([
                        "user_payment_id" => $user_payment_data->id,
                        "variant_id" => $variant['id'],
                        "quantity" => $variant['id'],
                    ]);
                }
            }


            return redirect()->away($payment_invoice['invoice_url']);
        } catch (\Throwable $th) {
            
            return back();
        }
    }
}
