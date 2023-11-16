<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShippingController;
use App\Models\Product;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class UserPaymentController extends Controller
{
    public function store(Request $request)
    {

        $product = Product::where('id', 1)->first();

        $shipping = new ShippingController();

        if ($request->shipping_type == 'on_send') {
            $shipping_cost = $shipping->get_shipping_cost_by_city($request);
        } else {
            $shipping_cost = 0;
        }

        $total_cost = $product->price + $shipping_cost;

        $date = now();
        $create_invoice_request = [
            "external_id" => 'P00' . "-" . Auth::user()->id . '-' . $date->format('Ymd-His'),
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

        $shipping_courier = ($request->shipping_type == 'on_send') ? 'jne' : null;

        // dd($payment_invoice['expiry_date']);
        UserPayment::create([
            "user_id" => Auth::user()->id,
            "product_id" => $product->id,
            "payment_code" => 'P00' . "-" . Auth::user()->id . '-' . $date->format('Ymd-His'),
            "total_payment" => $total_cost,
            "date" =>  $payment_invoice['expiry_date'],
            "valid_until" =>  $valid_until,
            "status" => "pending",
            "redirect_url" => $payment_invoice['invoice_url'],
            "shipping_type" => $request->shipping_type,
            "shipping_courier" => $shipping_courier
        ]);

        return redirect()->away($payment_invoice['invoice_url']);
    }
}
