<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TestingController;
use App\Models\City;
use App\Models\Product;
use App\Models\Province;
use App\Models\User;
use App\Models\UserBiodata;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Utilities\GenerateRefferal;
use Illuminate\Support\Env;



class RegisterController extends Controller
{
    public function index()
    {

        $cities = City::all();
        $provincies = Province::all();

        return view('pages.guest.register.index', compact('cities', 'provincies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'no_whatsapp' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'alamat_lengkap' => 'required',
            'nama_rekening' => 'required',
            'nama_kontak_darurat' => 'required',
            'kode_referal' => 'required',
        ]);

        if (User::where('kode_referal', $request->kode_referal)->first()) {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'kode_referal' => GenerateRefferal::generate(),
            ]);
            $userBiodata = UserBiodata::create([
                'user_id' => $user->id,
                'nik' => $request->input('nik'),
                'provinsi' => $request->input('provinsi'),
                'no_whatsapp' => $request->input('no_whatsapp'),
                'kota' => $request->input('kota'),
                'nama_bank' => $request->input('nama_bank'),
                'no_rekening' => $request->input('no_rekening'),
                'nama_rekening' => $request->input('nama_rekening'),
                'nama_kontak_darurat' => $request->input('nama_kontak_darurat'),
                'nomor_kontak_darurat' => $request->input('nomor_kontak_darurat'),
                'referal_use' => $request->input('kode_referal'),
                'alamat_lengkap' => $request->input('alamat_lengkap'),
            ]);
            Auth::login($user);
            return redirect('/user/dashboard');
        }

        return back()->withErrors(['msg' => 'Data tidak sesuai']);
    }
}
