<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class AdminOrderController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now();

        $orders = UserPayment::where("status", "paid")->latest()->paginate(10);

        $count_waiting_order = count(UserPayment::where('status', 'pending')->whereDate('valid_until', '>=', $currentDate)->latest()->get());
        return view('pages.admin.order.index', compact('orders', 'count_waiting_order'));
    }

    public function store(Request $request)
    {
        $user_payment = UserPayment::where('id', $request->user_payment_id)->first();
        if ($user_payment && $request->shipping) {
            $user_payment->update([
                "shipping_status" => "deliver",
                "shipping_code" => $request->shipping,
            ]);
        }

        toast('Telah Mengirimkan Nomor Resi!', 'success');

        return back();
    }
}
