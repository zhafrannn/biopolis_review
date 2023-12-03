<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Xendit\Configuration;
use Illuminate\Support\Str;
use Xendit\Invoice\InvoiceApi;
use Xendit\xendit;

class TestingController extends Controller
{

    // public function __construct()
    // {
    //     Configuration::setXenditKey("xnd_development_tbhRC1voL5s6wNzENJOKYKOEGX60D8wJ3vvFGbiW9NBHgG4r7mpB5C2JFc3xrt");
    // }

    public function index()
    {
        // Ganti URL dengan URL yang sesuai
        $url = 'https://www.google.com';

        // Redirect
        return redirect()->away($url);


        // $city_id = explode('-', '440-Sumedang');

        // $response = Http::withHeaders([
        //     'key' => env('RAJA_ONGKIR_API_KEY'),
        // ])->post('https://api.rajaongkir.com/starter/cost', [
        //     'origin' => env('RAJA_ONGKIR_ORIGIN_ID'),
        //     'destination' => $city_id[0],
        //     'weight' => 1000,
        //     "courier" => 'jne'
        // ]);
        // $courier_cost = $response['rajaongkir']['results'][0]['costs'][1]['cost'][0]['value'];

        // return dd($courier_cost);
        // $date = now();
        // $apiInstance = new InvoiceApi();
        // $create_invoice_request = [
        //     "external_id" => 'P00' . "1031" . '-' . $date->format('Ymd-His'),
        //     "description" => "Test Invoice",
        //     "amount" => 40000,
        //     "invoice_duration" => 86400,
        //     "currency" => "IDR",
        //     "reminder_time" => 1,
        //     "should_send_email" => true,
        //     "payer_email" => "hanggitya86@gmail.com",
        //     "customer" => [
        //         "given_names" => "nama_leng",
        //     ],
        // ];
        // try {
        //     $createInvoice = $apiInstance->createInvoice($create_invoice_request);
        // } catch (\Xendit\XenditSdkException $e) {
        //     echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
        //     echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
        // }

        // return dd($createInvoice);
    }

    public function testing_email_balance()
    {
        $email = [
            "kode_pencairan" => "WDB-123-123-123",
            "tanggal" => "12 Januari 2024",
            "total_pencairan" => 300000,
            "keterangan" => "Pencairan komisi senilai Rp.300.000,-",
            "rekening" => "1239102303" . " " . "(BCA)",
        ];
        Mail::to("hanggityasri@gmail.com")->send(new SendEmailBalance($email));
        return 'email was sent';
    }

    public function dropAllTables(Request $request)
    {
        // Export dulu terus taruh ke folder storage
        // Kirim ke drive

        // Delete
        if (env('SECRET_CODE') == $request->secret_code) {

            Artisan::call('migrate:reset', [
                '--force' => true,
            ]);
        }
    }
}
