<?php

declare(strict_types=1);

namespace App\HF\Services\Wallet;

use App\HF\Repositories\Wallet\CreateWalletRepository;
use App\Http\Controllers\Wallet\DTO\CreateWalletDTO;
use App\Models\Wallet;

final class CreateWalletService implements CreateWalletInterface
{
    public function __construct(private CreateWalletRepository $repo) {}

    public function execute(CreateWalletDTO $dto): Wallet
    {
        return $this->repo->create($dto);
    }
}
