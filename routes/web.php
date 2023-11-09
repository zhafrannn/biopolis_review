<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ----------------- Lihat Ke figma,Route Route ini menyesuaikan dari figma -------------


// -----------Jojo Member---------------------
Route::get('/info-produk', function () {
    return view('pages.member.info-produk.index');
});
Route::get('/referral', function () {
    return view('pages.member.referral.index');
});
Route::get('/poin', function () {
    return view('pages.member.poin.index');
});
Route::get('/withdraw-affiliate', function () {
    return view('pages.member.withdraw-affiliate.index');
});
Route::get('/transaksi', function () {
    return view('pages.member.transaksi.index');
});
Route::get('/menunggu-pembayaran', function () {
    return view('pages.member.transaksi.menunggu-pembayaran.index');
});

Route::prefix('transaksi')->group(function () {
    Route::get('/', function () {
        return view('pages.member.index');
    });
    Route::get('/menunggu-pembayaran', function () {
        return view('pages.member.menunggu-pembayaran.index');
    });
});


// ----------Hanggit Admin--------------------
Route::get('/', function () {
    return view('pages.dashboard.index');
});
Route::get('/mitra', function () {
    return view('pages.mitra.index');
});
Route::get('/penjualan', function () {
    return view('pages.penjualan.index');
});

Route::prefix('produk')->group(function () {
    Route::get('/', function () {
        return view('pages.produk.index');
    });
    Route::get('/create', function () {
        return view('pages.produk.create');
    });
    Route::get('/edit', function () {
        return view('pages.produk.edit');
    });
});

Route::prefix('order')->group(function () {
    Route::get('/', function () {
        return view('pages.order.index');
    });
    Route::get('/waiting-order', function () {
        return view('pages.order.waiting-order.index');
    });
});

Route::prefix('user-management')->group(function () {
    Route::get('/', function () {
        return view('pages.user-management.index');
    });
    Route::get('/create', function () {
        return view('pages.user-management.create');
    });
    Route::get('/edit', function () {
        return view('pages.user-management.edit');
    });
});

Route::get('/pengajuan-pencairan', function () {
    return view('pages.pengajuan-pencairan.index');
});

Route::get('/pengajuan-penukaran-poin', function () {
    return view('pages.pengajuan-penukaran-poin.index');
});
Route::get('/pengajuan-penggantian-rekening', function () {
    return view('pages.pengajuan-penggantian-rekening.index');
});
