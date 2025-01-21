<?php

declare(strict_types=1);

namespace App\HF\Repositories\Wallet;

use App\Models\Wallet;
use Illuminate\Database\Eloquent\Collection;

/**
 * Репозиторий получения всех кошельков.
 */
final class GetWalletsRepository
{
    public function get(): Collection
    {
        return Wallet::all();
    }
}
