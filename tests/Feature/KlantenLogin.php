<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class KlantenLogin extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        {
            $user = User::create([
                'name' => 'Lol lol',
                'email' => 'lol@lol.com',
                'password' => Hash::make('password'),
            ]);
    
            $response = $this->post('/login', [
                'email' => $user->email,
                'password' => 'password',
            ]);
    
            $response->assertRedirect('/home');
            $this->assertAuthenticatedAs($user);
        }
    }
}
