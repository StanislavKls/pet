<?php

declare(strict_types=1);

namespace App\HF\Repositories\Wallet;

use App\HF\Exceptions\DbException;
use App\Http\Controllers\Wallet\DTO\DestroyWalletDTO;
use App\Models\Wallet;

/**
 * Репозиторий удаления кошелька.
 */
final class DestroyWalletRepository
{
    public function destroy(DestroyWalletDTO $dto): void
    {
        try {
            $wallet = Wallet::findOrFail($dto->id);
            $wallet->delete();
        } catch (\Exception $e) {
            throw new DbException("Не удалось удалить кошелек с ID: {$dto->id}", 0, $e);
        }
    }
}
