<?php

use App\Http\Controllers\Wallet\CreateWalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (Request $request) {
    return response()->json(['status' => 'OK']);
});

Route::prefix('wallets')->group(function () {
    Route::post('/create-wallet', CreateWalletController::class);
});
