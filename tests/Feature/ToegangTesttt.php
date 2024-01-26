<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ToegangTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function toegangTotBestellenNietIngelogd()
    {
        $response = $this->get('/bestellen');

        $response->assertStatus(200);
        $response->assertViewIs('bestellen');

    }
}
