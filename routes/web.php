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
    return view('pages.guest.landing-page.index');
});
Route::get('/login', function () {
    return view('pages.guest.login.index');
});
Route::get('/register', function () {
    return view('pages.guest.register.index');
});

// -----------Jojo Member---------------------
Route::prefix('profile')->group(function () {
    Route::get('/', function () {
        return view('pages.member.profile.index');
    });
    Route::get('/rekening', function () {
        return view('pages.member.profile.rekening.index');
    });
    Route::prefix('alamat')->group(function () {
        Route::get('/', function () {
            return view('pages.member.profile.alamat.index');
        });
        Route::get('/create', function () {
            return view('pages.member.profile.alamat.create');
        });
        Route::get('/edit', function () {
            return view('pages.member.profile.alamat.edit');
        });
    });
});

// ----------------- Role User

Route::get('/dashboard-user', function () {
    return view('pages.member.dashboard.index');
});
Route::get('/profile', function () {
    return view('pages.member.profile.index');
});
Route::get('/info-produk', function () {
    return view('pages.member.info-produk.index');
});
Route::get('/beli-produk', function () {
    return view('pages.member.produk.index');
});
Route::get('/checkout', function () {
    return view('pages.member.produk.checkout.index');
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
Route::get('/notification', function () {
    return view('pages.member.notification.index');
});

Route::prefix('transaksi')->group(function () {
    Route::get('/', function () {
        return view('pages.member.transaksi.index');
    });
    Route::get('/menunggu-pembayaran', function () {
        return view('pages.member.transaksi.menunggu-pembayaran.index');
    });
});
// --------------- Ebd Role User


// ----------Hanggit Admin--------------------
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard.index');
    });
    Route::get('/mitra', function () {
        return view('pages.admin.mitra.index');
    });
    Route::get('/penjualan', function () {
        return view('pages.admin.penjualan.index');
    });
    Route::prefix('produk')->group(function () {
        Route::get('/', function () {
            return view('pages.admin.produk.index');
        });
        Route::get('/create', function () {
            return view('pages.admin.produk.create');
        });
        Route::get('/edit', function () {
            return view('pages.admin.produk.edit');
        });
    });

    Route::prefix('order')->group(function () {
        Route::get('/', function () {
            return view('pages.admin.order.index');
        });
        Route::get('/waiting-order', function () {
            return view('pages.admin.order.waiting-order.index');
        });
    });

    Route::prefix('user-management')->group(function () {
        Route::get('/', function () {
            return view('pages.admin.user-management.index');
        });
        Route::get('/show', function () {
            return view('pages.admin.user-management.show');
        });
        Route::get('/edit', function () {
            return view('pages.admin.user-management.edit');
        });
    });

    Route::get('/pengajuan-pencairan', function () {
        return view('pages.admin.pengajuan-pencairan.index');
    });

    Route::get('/pengajuan-penukaran-poin', function () {
        return view('pages.admin.pengajuan-penukaran-poin.index');
    });
    Route::get('/pengajuan-penggantian-rekening', function () {
        return view('pages.admin.pengajuan-penggantian-rekening.index');
    });
});
