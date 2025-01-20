<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $wallets = [
            ['name' => 'Кошелёк 1', 'balance' => 1000],
            ['name' => 'Кошелёк 2', 'balance' => 2000],
            ['name' => 'Кошелёк 3', 'balance' => 3000],
        ];

        $transactions = [
            ['date' => '2022-01-01', 'time' => '10:00', 'description' => 'Пополнение с карты', 'income' => 1000, 'expense' => null, 'comment' => null, 'user' => 'User 1'],
        ];
        return view('app.main', compact('wallets', 'transactions'));
    }
}
