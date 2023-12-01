<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TestingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/webhook-xendit', [PaymentController::class, 'webhook_payment']);
Route::get('/notification/user/{id}', [NotificationController::class, 'index']);

Route::post('/testing-dummy', [TestingController::class, "dropAllTables"]);

Route::get('/get-address', [AddressController::class, 'index']);
