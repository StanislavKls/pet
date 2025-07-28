<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (Request $request) {
    return response()->json(['status' => 'OK']);
});

Route::prefix('wallets')->group(function (): void {
    Route::post('/create', App\Http\Controllers\Wallet\CreateWalletController::class);
    Route::delete('/destroy', App\Http\Controllers\Wallet\DestroyWalletController::class);
    Route::get('/', App\Http\Controllers\Wallet\GetWalletsController::class);
});
