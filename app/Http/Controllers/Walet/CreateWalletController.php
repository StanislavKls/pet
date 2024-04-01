<?php

declare(strict_types=1);

namespace App\Http\Controllers\Walet;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CreateWalletController extends Controller
{
    private string $test;

    public function __invoke(): JsonResponse
    {
        $c = 123;

        return response()->json();
    }
}
