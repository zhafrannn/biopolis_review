<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBiodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberReferalController extends Controller
{
    public function index()
    {
        $members = UserBiodata::where('referal_use', Auth::user()->kode_referal)->get();
        $referals = [];
        foreach ($members as $item) {
            $user = User::where('id', $item->id)->first();
            if ($user->role == 'member') {
                $referals[] = $user;
            }
        }

        return view('pages.member.referral.index', compact('referals'));
    }
}
