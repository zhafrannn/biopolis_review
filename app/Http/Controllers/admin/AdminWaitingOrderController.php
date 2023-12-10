<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminWaitingOrderController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now();

        $user_payment = UserPayment::where('status', 'pending')->whereDate('valid_until', '>=', $currentDate)->latest()->get();

        return view('pages.admin.order.waiting-order.index', compact('user_payment',));
    }
}
