<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index($id)
    {
        $data = Notification::where('user_id', $id)->latest()->get();
        return response()->json($data);
    }
}
