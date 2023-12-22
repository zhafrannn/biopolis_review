<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MemberBankReplacementController extends Controller
{
    public function store(Request $request)
    {
        UserBank::create([
            'user_id' => Auth::user()->id,
            'nama_bank' => $request->nama_bank,
            'nama_rekening' => $request->nama_rekening,
            'no_rekening' => $request->no_rekening,
            'status' => 'pending'
        ]);

        toast('Penggantian Rekening Diajukan!', 'success');

        return back();
    }
}
