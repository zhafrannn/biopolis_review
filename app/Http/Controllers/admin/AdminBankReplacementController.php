<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBank;
use Illuminate\Http\Request;

class AdminBankReplacementController extends Controller
{
    public function index()
    {
        $banks = UserBank::where('status', 'pending')->get();
        foreach ($banks as $bank) {
            $users = User::where('id', $banks->user_id)->get();
        }

        return view('pages.admin.pengajuan-penggantian-rekening.index', compact('users'));
    }
}
