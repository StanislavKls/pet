<?php

declare(strict_types=1);

namespace App\Http\Controllers\Wallet;

use App\HF\Services\Wallet\GetWalletsService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class GetWalletsController extends Controller
{
    private string $test;

    public function __invoke(GetWalletsService $service): JsonResponse
    {
        $wallets = $service->get();

        return response()->json($wallets);
    }
}
