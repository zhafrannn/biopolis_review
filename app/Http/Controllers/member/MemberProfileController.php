<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBiodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberProfileController extends Controller
{
    public function update($id, Request $request)
    {
        $user = User::where('id', $id)->first();
        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]
        );
        $userBiodata = UserBiodata::where('user_id', $id)->first();
        $userBiodata->update(
            [
                'nik' => $request->nik,
                'no_whatsapp' => $request->no_whatsapp
            ]
        );
        return back();
    }
}
