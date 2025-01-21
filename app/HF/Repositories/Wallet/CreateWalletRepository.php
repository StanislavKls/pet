<?php

declare(strict_types=1);

namespace App\HF\Repositories\Wallet;

use App\Http\Controllers\Wallet\DTO\CreateWalletDTO;
use App\Models\Wallet;

/**
 * Репозиторий создания кошелька.
 */
final class CreateWalletRepository
{
    public function create(CreateWalletDTO $dto): Wallet
    {
        $model = new Wallet;
        $model->name = $dto->name;
        $model->save();

        return $model;
    }
}
