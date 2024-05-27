<?php

declare(strict_types=1);

namespace App\HF\Services\Wallet;

use App\Models\Wallet;
use App\Http\Controllers\Wallet\DTO\CreateWalletDTO;
use App\HF\Repositories\Wallet\CreateWalletRepository;

final class CreateWalletService implements CreateWalletInterface
{
    public function __construct(private CreateWalletRepository $repo)
    {
    }
    public function execute(CreateWalletDTO $dto): Wallet
    {
        return $this->repo->create($dto);
    }
}
