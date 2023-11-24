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
        dd($request->all());
        UserBank::create([
            'user_id' => Auth::user()->id,
            'no_rekening' => $request->no_rekening,
            'status' => 'pending'
        ]);

        return back();
    }
}
