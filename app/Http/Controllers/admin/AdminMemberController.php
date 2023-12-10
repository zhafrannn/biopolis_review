<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMemberController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'member')->get();

        return view('pages.admin.mitra.index', compact('users'));
    }
}
