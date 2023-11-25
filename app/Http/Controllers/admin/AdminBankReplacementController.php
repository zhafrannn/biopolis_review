<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBank;
use App\Models\UserBiodata;
use Illuminate\Http\Request;

class AdminBankReplacementController extends Controller
{
    public function index()
    {
        $banks = UserBank::where('status', 'pending')->with('user')->get();
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
        

        return back();
    }
}
