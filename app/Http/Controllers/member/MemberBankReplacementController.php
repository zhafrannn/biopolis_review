<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return back();
    }
}
