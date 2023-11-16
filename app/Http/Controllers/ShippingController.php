<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ShippingController extends Controller
{
    public function get_shipping_cost_by_city(Request $request)
    {
        $city_id = explode('-', Auth::user()->user_biodata->kota);
        $response = Http::withHeaders([
            'key' => env('RAJA_ONGKIR_API_KEY'),
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => env('RAJA_ONGKIR_ORIGIN_ID'),
            'destination' => $city_id[0],
            'weight' => 1000,
            "courier" => 'jne'
        ]);
        $courier_cost = $response['rajaongkir']['results'][0]['costs'][1]['cost'][0]['value'];

        return $courier_cost;
    }
}
