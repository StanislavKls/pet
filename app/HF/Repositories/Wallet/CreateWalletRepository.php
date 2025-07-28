<?php

declare(strict_types=1);

namespace App\HF\Repositories\Wallet;

use App\HF\Exceptions\DbException;
use App\Http\Controllers\Wallet\DTO\CreateWalletDTO;
use App\Models\Wallet;

/**
 * Репозиторий создания кошелька.
 */
final class CreateWalletRepository
{
    public function create(CreateWalletDTO $dto): Wallet
    {
        try {
            $model       = new Wallet();
            $model->name = $dto->name;
            $model->save();

            return $model;
        } catch (\Exception $e) {
            throw new DbException("Не удалось создать кошелек с именем: {$dto->name}", 0, $e);
        }
    }
}
