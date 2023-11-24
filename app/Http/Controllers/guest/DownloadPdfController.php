<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadPdfController extends Controller
{
    public function DownloadFile()
    {
        // Path ke file yang ingin di-download
        $filePath = storage_path('app/public/reseller_biopolis.pdf');

        // Nama file yang akan ditampilkan pada browser
        $fileName = 'reseller_biopolis.pdf';

        // Headers untuk menentukan jenis konten dan nama file
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        // Response download
        return response()->download($filePath, $fileName, $headers);
    }
}
