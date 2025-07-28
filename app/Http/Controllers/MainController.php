<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function main()
    {
        $transactions = [
            ['date' => '2022-01-01', 'time' => '10:00', 'description' => 'Пополнение с карты', 'balance' => 1000, 'expense' => null, 'comment' => null, 'user' => 'User 1'],
        ];

        return view('app.main', compact('transactions'));
    }
}
