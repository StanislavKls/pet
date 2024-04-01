<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Walet;

use Tests\TestCase;

class CreateWalletControllerTest extends TestCase
{
    /**
     * Тест контроллера.
     *
     * @return void
     */
    public function testInvoke(): void
    {
        $response = $this->post('/api/walets/create-walet');

        $response->assertStatus(200);
    }
}
