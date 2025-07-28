<?php

declare(strict_types=1);

namespace App\Http\Controllers\Wallet;

use App\HF\Services\Wallet\DestroyWalletService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Wallet\DTO\DestroyWalletDTO;
use App\Http\Requests\Wallet\DestroyWalletRequest;
use Illuminate\Http\JsonResponse;

class DestroyWalletController extends Controller
{
    public function __invoke(DestroyWalletRequest $request, DestroyWalletService $service): JsonResponse
    {
        $dto = new DestroyWalletDTO((int) $request->id);
        $service->execute($dto);

        return response()->json(['status' => 'OK', 'error' => 'NONE']);
    }
}
