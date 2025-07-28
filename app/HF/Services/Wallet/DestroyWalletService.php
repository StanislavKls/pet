<?php

declare(strict_types=1);

namespace App\HF\Services\Wallet;

use App\HF\Repositories\Wallet\DestroyWalletRepository;
use App\Http\Controllers\Wallet\DTO\DestroyWalletDTO;

final class DestroyWalletService
{
    public function __construct(private DestroyWalletRepository $repo)
    {
    }

    public function execute(DestroyWalletDTO $dto): void
    {
        $this->repo->destroy($dto);
    }
}
