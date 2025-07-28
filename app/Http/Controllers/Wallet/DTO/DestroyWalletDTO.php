<?php

declare(strict_types=1);

namespace App\Http\Controllers\Wallet\DTO;

final class DestroyWalletDTO
{
    public function __construct(
        public int $id,
    ) {
    }
}
