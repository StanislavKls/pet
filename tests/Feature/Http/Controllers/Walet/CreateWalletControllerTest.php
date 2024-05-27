<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Walet;

use Tests\TestCase;

class CreateWalletControllerTest extends TestCase
{
    /**
     * Тест контроллера.
     * @dataProvider provider
     * @return void
     */
    public function testInvoke($name): void
    {
        // give

        // when
        $response = $this->postJson('/api/wallets/create-wallet', ['name' => $name]);

        // then
        $response->assertStatus(200);
    }

    /**
     * Провайдер имен кошелька.
     *
     * @return array
     */
    public function provider(): array
    {
        return [
          'Валидный тест' => ['Кредитная карта'],
        ];
    }
}
