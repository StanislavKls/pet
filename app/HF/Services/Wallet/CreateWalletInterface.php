<?php

declare(strict_types=1);

namespace App\HF\Services\Wallet;

use App\Models\Wallet;
use App\Http\Controllers\Wallet\DTO\CreateWalletDTO;

/**
 * Интерфейс сервиса создания кошелька.
 */
interface CreateWalletInterface
{
    public function execute(CreateWalletDTO $dto): Wallet;
}
