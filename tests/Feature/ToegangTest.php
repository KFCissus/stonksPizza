<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ToegangTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function toegangTotBestellenNietIngelogd(): void
    {
        $response = $this->get('/bestellen');

        $response->assertStatus(200);
        $response->assertViewIs('bestellen');

    }
}
