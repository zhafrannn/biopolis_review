<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        $data = '';
        Mail::to("zhafran858@gmail.com")->send(new SendEmail($data));
        return "email terkirim";
    }
}
