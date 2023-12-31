<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBank;
use App\Models\UserBiodata;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBankReplacementController extends Controller
{
    public function index()
    {
        $banks = UserBank::with('user')->get();
        return view('pages.admin.pengajuan-penggantian-rekening.index', compact('banks'));
    }

    public function update($id, Request $request)
    {
        $banks = UserBank::where('id', $id)->first();
        $banks->update([
            'status' => 'completed'
        ]);

        $user = UserBiodata::where('user_id', $banks->user_id);
        $user->update([
            'nama_bank' => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
            'nama_rekening' => $request->nama_rekening,
        ]);

        toast('Pengajuan Penggantian Akun Bank Disetujui!', 'success');
        return back();
    }
}
