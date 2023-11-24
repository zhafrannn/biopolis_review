<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBiodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminUserManagementController extends Controller
{
    public function index()
    {
        $raja_ongkir_get_cities = Http::withHeaders([
            'key' => env('RAJA_ONGKIR_API_KEY'),
        ])->get('https://api.rajaongkir.com/starter/city');
        $cities = $raja_ongkir_get_cities['rajaongkir']['results'];
        $raja_ongkir_get_province = Http::withHeaders([
            'key' => env('RAJA_ONGKIR_API_KEY'),
        ])->get('https://api.rajaongkir.com/starter/province');
        $provincies = $raja_ongkir_get_province['rajaongkir']['results'];

        $members = User::with('user_biodata')->get();

        return view('pages.admin.user-management.index', compact('members', 'cities', 'provincies'));
    }

    public function store(Request $request)
    {
    }

    public function update($id, Request $request)
    {
        $user = User::where('id', $id)->first();
        if (!empty($request->password)) {
            $password = bcrypt($request->password);
        } else {
            $password = $user->password;
        }
        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password
            ]
        );
        $userBiodata = UserBiodata::where('user_id', $id)->first();
        $userBiodata->update(
            [
                'nik' => $request->nik,
                'no_whatsapp' => $request->no_whatsapp,
                'nama_bank' => $request->nama_bank,
                'nama_rekening' => $request->nama_rekening,
                'no_rekening' => $request->no_rekening,
                'provinsi' => $request->provinsi,
                'kota' => $request->kota,
                'alamat_lengkap' => $request->alamat_lengkap,
                'nama_kontak_darurat' => $request->nama_kontak_darurat,
                'nomor_kontak_darurat' => $request->nomor_kontak_darurat
            ]
        );
        return back();
    }
}
