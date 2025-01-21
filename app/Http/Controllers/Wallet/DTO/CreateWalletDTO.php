<?php

declare(strict_types=1);

namespace App\Http\Controllers\Wallet\DTO;

final class CreateWalletDTO
{
    public function __construct(
        public string $name,
    ) {}
}
