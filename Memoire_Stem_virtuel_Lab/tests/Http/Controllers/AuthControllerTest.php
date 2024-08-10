<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\AuthController;
use PHPUnit\Framework\TestCase;

class AuthControllerTest extends TestCase
{

    public function testRegister()
    {
        $response = $this->post('/api/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertStatus(201);
    }
}
