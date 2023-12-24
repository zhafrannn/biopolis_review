<?php

namespace App\Http\Controllers\user;

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


class UserPaymentController extends Controller
{
    public function store(Request $request)
    {
        // Inisiasi
        $variant_item =  [];

        $product = Product::where('id', 1)->first();
        $total_packet_product = $product->packet_quantity;

        $variants = Variant::all();

        foreach ($variants as $variant) {
            $variant_item[] = [
                "variant_id" => $variant->id,
                "quantity" => 0
            ];
        }

        $iterations = $total_packet_product;
        $arrayLength = count($variants);
        for ($i = 1; $i <= $iterations; $i++) {
            $index = ($i - 1) % $arrayLength;
            $variant_item[$index]['quantity'] += 1;
        }

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


        $user_payment_data = UserPayment::create([
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

        foreach ($variant_item as $variant) {
            UserPaymentVariant::create([
                "variant_id" => $variant['variant_id'],
                "user_payment_id" => $user_payment_data->id,
                "quantity" => $variant['quantity'],
            ]);
        }



        return redirect()->away($payment_invoice['invoice_url']);
    }
}
