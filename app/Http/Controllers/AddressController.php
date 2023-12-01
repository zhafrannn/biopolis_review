<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $provincies = Province::all();
        $cities = City::all();

        return response()->json([
            'cities' => $cities,
            'provincies' => $provincies
        ]);
    }
}
