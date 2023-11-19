<?php

use App\Utilities\GenerateRefferal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\guest\LoginController;
use App\Http\Controllers\guest\LogoutController;
use App\Http\Controllers\guest\RegisterController;
use App\Http\Controllers\user\UserPaymentController;
use App\Http\Controllers\member\MemberPointController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\member\MemberPaymentController;
use App\Http\Controllers\member\MemberProductController;
use App\Http\Controllers\member\MemberCheckoutController;
use App\Http\Controllers\member\MemberDashboardController;
use App\Http\Controllers\member\MemberTransactionController;
use App\Http\Controllers\member\MemberWaitingCheckoutController;
use App\Http\Controllers\admin\AdminContentManagementSystemController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\member\MemberProfileController;

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

Route::get('/testing', [TestingController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'index'])->middleware('auth');

// -----------Jojo Member---------------------
Route::prefix('member')->group(function () {
    // Dashboard
    Route::get('/dashboard', [MemberDashboardController::class, 'index'])->middleware('auth');
    // Product
    Route::get('/product', [MemberProductController::class, 'index']);
    // Checkout
    Route::get('/checkout/{slug}', [MemberCheckoutController::class, 'show']);
    // Payment
    Route::post('/payment', [MemberPaymentController::class, 'store']);

    // Transaction
    Route::prefix('transaction')->group(function () {
        Route::get('/', [MemberTransactionController::class, 'index']);
        Route::get('/waiting-order', [MemberWaitingCheckoutController::class, 'index']);
    });
    Route::get('/point', [MemberPointController::class, "index"]);

    Route::post('/profile/update/{id}', [MemberProfileController::class, 'update'])->name('profile_update');
});

Route::get('/info-produk', function () {
    return view('pages.member.info-produk.index');
});


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

Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->middleware('auth');

Route::post('/user-payment-activation', [UserPaymentController::class, 'store'])->middleware('auth');

Route::get('/profile', function () {
    return view('pages.member.profile.index');
});
Route::get('/info-produk', function () {
    return view('pages.member.info-produk.index');
});



Route::get('/referral', function () {
    return view('pages.member.referral.index');
});

Route::get('/withdraw-affiliate', function () {
    return view('pages.member.withdraw-affiliate.index');
});
Route::get('/notification', function () {
    return view('pages.member.notification.index');
});


// --------------- Ebd Role User

Route::get('/testing-asd', function () {
    return view('pages.admin.content-management-system.index');
});

Route::get('/testing-123', function () {
    return view('pages.admin.content-management-system.index');
})->name('cms_update');

Route::get('/content-management-system', [AdminContentManagementSystemController::class, 'edit']);
Route::put('/content-management-system/update', [AdminContentManagementSystemController::class, 'update'])->name('cms_update');


// ----------Hanggit Admin--------------------
Route::prefix('admin')->group(function () {


    Route::get('/', [AdminDashboardController::class, 'index']);

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
