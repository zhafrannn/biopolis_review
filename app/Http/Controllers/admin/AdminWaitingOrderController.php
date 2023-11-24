<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminWaitingOrderController extends Controller
{
    public function index()
    {
        return view('pages.admin.order.waiting-order.index');
    }
}
