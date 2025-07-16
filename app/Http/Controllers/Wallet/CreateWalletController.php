<?php

declare(strict_types=1);

namespace App\Http\Controllers\Wallet;

use App\HF\Services\Wallet\CreateWalletService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Wallet\DTO\CreateWalletDTO;
use App\Http\Requests\Wallet\CreateWalletRequest;
use Illuminate\Http\JsonResponse;

class CreateWalletController extends Controller
{
    private string $test;

    public function __invoke(CreateWalletRequest $request, CreateWalletService $service): JsonResponse
    {
        $dto = new CreateWalletDTO($request->name);
        $service->execute($dto);

        return response()->json(['status' => 'OK', 'error' => 'NONE']);
    }
}
