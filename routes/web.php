<?php

use App\Http\Controllers\admin\AdminBalanceController;
use App\Http\Controllers\admin\AdminBankReplacementController;
use App\Http\Controllers\admin\AdminBenefitController;
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
use App\Http\Controllers\admin\AdminIncomeController;
use App\Http\Controllers\admin\AdminMemberController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminTestimonyController;
use App\Http\Controllers\admin\AdminUserManagementController;
use App\Http\Controllers\admin\AdminVariantController;
use App\Http\Controllers\guest\DownloadPdfController;
use App\Http\Controllers\member\MemberBankReplacementController;
use App\Http\Controllers\member\MemberProductPurchasedController;
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
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::post('/user-payment-activation', [UserPaymentController::class, 'store'])->middleware('auth');
// -----------End User---------------------


// -----------Start Member---------------------
Route::middleware(['auth'])->prefix('member')->group(function () {
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
        Route::post('/', [MemberTransactionController::class, 'index']);
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

    Route::get('/info-produk', [MemberProductPurchasedController::class, 'index']);

    Route::get('/referral', [MemberReferalController::class, 'index']);
});


// -----------End Member---------------------


// -----------Start Role Admin---------------------
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
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

    Route::get('/penjualan', [AdminIncomeController::class, 'index']);

    Route::get('/mitra', [AdminMemberController::class, 'index']);

    Route::prefix('variant')->group(function () {
        Route::get('/', [AdminVariantController::class, 'index']);
        Route::post('/create', [AdminVariantController::class, 'store']);
        Route::put('/update/{id}', [AdminVariantController::class, 'update']);
        Route::get('/delete/{id}', [AdminVariantController::class, 'destroy']);
    });

    Route::prefix('produk')->group(function () {
        Route::get('/', [AdminProductController::class, 'index']);
        Route::post('/create', [AdminProductController::class, 'store']);
        Route::put('/update/{id}', [AdminProductController::class, 'update']);
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
    });

    // User Withdraw Balance
    Route::get('/pengajuan-pencairan', [AdminBalanceController::class, "index"]);
    Route::post('/pengajuan-pencairan', [AdminBalanceController::class, "store"]);
    Route::post('/pengajuan-pencairan/{id}', [AdminBalanceController::class, "update"]);

    // User Withdraw Point
    Route::get('/pengajuan-penukaran-poin', [AdminPointController::class, "index"]);
    Route::post('/pengajuan-penukaran-poin', [AdminPointController::class, "store"]);
    Route::post('/pengajuan-penukaran-poin/cancel', [AdminPointController::class, "delete"]);

    Route::get('/pengajuan-penggantian-rekening', [AdminBankReplacementController::class, "index"]);
    Route::post('/pengajuan-penggantian-rekening/{id}', [AdminBankReplacementController::class, "update"]);
});


Route::get('/testing-email', [EmailController::class, "index"]);
Route::get('/testing-email-balance', [TestingController::class, "testing_email_balance"]);


// -----------End Role Admin---------------------


// Bisi Kepake
// Route::get('/withdraw-affiliate', function () {
//     return view('pages.member.withdraw-affiliate.index');
// });
// Route::get('/notification', function () {
//     return view('pages.member.notification.index');
// });
// Route::get('/show', function () {
//     return view('pages.admin.user-management.show');
// });
// Route::get('/edit', function () {
//     return view('pages.admin.user-management.edit');
// });
// Route::get('/testing-asd', function () {
//     return view('pages.admin.content-management-system.index');
// });

// Route::get('/testing-123', function () {
//     return view('pages.admin.content-management-system.index');
// })->name('cms_update');

Route::get('/send-password', function () {
    $password = "asdqwe123";
    return bcrypt($password);
});
