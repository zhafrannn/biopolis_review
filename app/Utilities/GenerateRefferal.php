<?php
// app/Utilities/RandomStringGenerator.php

namespace App\Utilities;

class GenerateRefferal
{
    public static function generate($length = 5)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        // Tambahkan 3 digit waktu di bagian awal string
        $randomString = substr(time(), 0, 3) . $randomString;

        return $randomString;
    }
}
