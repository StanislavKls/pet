<?php

declare(strict_types=1);

namespace App\HF\Services\Wallet;

use App\HF\Repositories\Wallet\GetWalletsRepository;
use Illuminate\Database\Eloquent\Collection;

final class GetWalletsService
{
    public function __construct(private GetWalletsRepository $repo)
    {
    }

    public function get(): Collection
    {
        return $this->repo->get();
    }
}
