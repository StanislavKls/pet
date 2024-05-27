<?php

declare(strict_types=1);

namespace App\HF\Services\Wallet;

use App\Http\Controllers\Wallet\DTO\CreateWalletDTO;
use App\Models\Wallet;

/**
 * Интерфейс сервиса создания кошелька.
 */
interface CreateWalletInterface
{
    public function execute(CreateWalletDTO $dto): Wallet;
}
