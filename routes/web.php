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
