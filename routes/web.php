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
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminPointController;
use App\Http\Controllers\admin\AdminWaitingOrderController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\member\MemberBalanceController;
use App\Http\Controllers\admin\AdminFaqController;
use App\Http\Controllers\admin\AdminTestimonyController;
use App\Http\Controllers\admin\AdminUserManagementController;
use App\Http\Controllers\guest\DownloadPdfController;
use App\Http\Controllers\member\MemberBankReplacementController;
use App\Http\Controllers\member\MemberProfileController;
use App\Http\Controllers\member\MemberReferalController;
use App\Http\Controllers\member\MemberWithdrawController;

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

// ----------------- Start Guest -------------
Route::get('/testing', [TestingController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/reseller_biopolis', [DownloadPdfController::class, 'DownloadFile']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'index'])->middleware('auth');
// -----------End Guest------------------------


// -----------Start User---------------------
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->middleware('auth');

Route::post('/user-payment-activation', [UserPaymentController::class, 'store'])->middleware('auth');
// -----------End User---------------------


// -----------Start Member---------------------
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
    // Point
    Route::get('/point', [MemberPointController::class, "index"]);
    Route::post('/point', [MemberPointController::class, "store"]);

    // Balance
    Route::get('/balance', [MemberBalanceController::class, "index"]);
    Route::post('/balance', [MemberBalanceController::class, "store"]);

    Route::get('/withdraw-affiliate', function () {
        return view('pages.member.withdraw-affiliate.index');
    });

    Route::post('/profile/update/{id}', [MemberProfileController::class, 'update']);

    Route::post('/withdraw/{id}', [MemberWithdrawController::class, 'update']);

    Route::post('/bank-replacement', [MemberBankReplacementController::class, 'store'])->name('bank');

    Route::get('/info-produk', function () {
        return view('pages.member.info-produk.index');
    });

    Route::get('/referral', [MemberReferalController::class, 'index']);
});

Route::get('/withdraw-affiliate', function () {
    return view('pages.member.withdraw-affiliate.index');
});
Route::get('/notification', function () {
    return view('pages.member.notification.index');
});
// -----------End Member---------------------


// -----------Start Role Admin---------------------
Route::get('/testing-asd', function () {
    return view('pages.admin.content-management-system.index');
});

Route::get('/testing-123', function () {
    return view('pages.admin.content-management-system.index');
})->name('cms_update');


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index']);

    Route::get('/content-management', [AdminContentManagementSystemController::class, 'edit']);
    Route::put('/content-management-system/update', [AdminContentManagementSystemController::class, 'update'])->name('cms_update');

    Route::put('/content-management-system/testimony/create', [AdminTestimonyController::class, 'store']);
    Route::put('/content-management-system/testimony/update/{id}', [AdminTestimonyController::class, 'update']);
    Route::get('/content-management-system/testimony/delete/{id}', [AdminTestimonyController::class, 'destroy']);

    Route::put('/content-management-system/faq/create', [AdminFaqController::class, 'store']);
    Route::put('/content-management-system/faq/update/{id}', [AdminFaqController::class, 'update']);
    Route::get('/content-management-system/faq/delete/{id}', [AdminFaqController::class, 'destroy']);

    Route::put('/content-management-system/benefit/create', [AdminBenefitController::class, 'store']);
    Route::put('/content-management-system/benefit/update/{id}', [AdminBenefitController::class, 'update']);
    Route::get('/content-management-system/benefit/delete/{id}', [AdminBenefitController::class, 'destroy']);

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
        Route::get('/', [AdminOrderController::class, "index"]);
        Route::post('/', [AdminOrderController::class, "store"]);
        Route::get('/waiting-order', [AdminWaitingOrderController::class, "index"]);
    });

    Route::prefix('user-management')->group(function () {
        Route::get('/', [AdminUserManagementController::class, 'index']);
        Route::post('/create', [RegisterController::class, 'store']);
        Route::put('/update/{id}', [AdminUserManagementController::class, 'update']);

        // Route::get('/show', function () {
        //     return view('pages.admin.user-management.show');
        // });
        // Route::get('/edit', function () {
        //     return view('pages.admin.user-management.edit');
        // });
    });

    Route::get('/pengajuan-pencairan', function () {
        return view('pages.admin.pengajuan-pencairan.index');
    });

    // User Withdraw Point
    Route::get('/pengajuan-penukaran-poin', [AdminPointController::class, "index"]);
    Route::post('/pengajuan-penukaran-poin', [AdminPointController::class, "store"]);
    Route::post('/pengajuan-penukaran-poin/cancel', [AdminPointController::class, "delete"]);

    // 
    Route::get('/pengajuan-penggantian-rekening', function () {
        return view('pages.admin.pengajuan-penggantian-rekening.index');
    });
});


Route::get('/testing-email', [EmailController::class, "index"]);
// -----------End Role Admin---------------------
