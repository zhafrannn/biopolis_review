<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\UserPayment;
use App\Models\UserWallet;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{

    public function index()
    {
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

        // Total Pendapatan
        $paids = UserPayment::where('status', 'paid')->get();
        $total_sale = 0;
        foreach ($paids as $paid) {
            $product = Product::where('id', $paid->product_id)->first();

            $total_sale += $product->price;

            // Tanggal yang diberikan
            $tanggal = $paid->date;
            // Ubah tanggal menjadi format DateTime
            $tanggal_dt = new DateTime($tanggal);
            // Ambil nama bulan dari tanggal yang diberikan
            $bulan_tanggal = $tanggal_dt->format('M');

            // Looping untuk mencari bulan yang sesuai dengan bulan dari tanggal
            foreach ($chart_data as &$chartItem) {
                if ($chartItem['month_name'] === $bulan_tanggal) {

                    $chartItem['total'] += $product->price;
                    break;
                }
            }
        }

        // Total Mitra
        $members = User::where('role', 'member')->get();
        $total_member = 0;
        foreach ($members as $member) {
            $total_member += 1;
        }

        // Daftar Ranking
        $ranking = UserWallet::orderBy('total_point', 'desc')->with('user')->get();


        return view('pages.admin.dashboard.index', compact('total_sale', 'total_member', 'chart_data', 'ranking'));
    }
}
