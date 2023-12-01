<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use App\Models\UserBiodata;
use App\Utilities\GenerateRefferal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminUserManagementController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $provincies = Province::all();

        $members = User::with('user_biodata')->get();

        return view('pages.admin.user-management.index', compact('members', 'cities', 'provincies'));
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
