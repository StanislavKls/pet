<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Walet;

use App\Models\Wallet;
use Tests\Feature\AbstractFeatureTestCase;

class CreateWalletControllerTest extends AbstractFeatureTestCase
{
    /**
     * Тест контроллера.
     * @dataProvider provider
     */
    public function testInvoke($name): void
    {
        // give/when
        $response = $this->postJson('/api/wallets/create-wallet', ['name' => $name]);

        // then
        $response->assertJson(['status' => 'OK', 'error' => 'NONE']);
        $this->assertDatabaseHas(Wallet::class, ['name' => $name, 'amount' => null]);
    }

    /**
     * Провайдер имен кошелька.
     */
    public function provider(): array
    {
        return [
            'Валидный тест' => ['Кредитная карта'],
        ];
    }
}
