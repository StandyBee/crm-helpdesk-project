<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    use WithFaker;
    use DatabaseTransactions;
    
    protected $user;
    protected $password;

    protected function setUp(): void
    {
        parent::setUp();
        $this->password = $this->faker->password();
        $this->user = User::factory()->create([
            'password' => bcrypt($this->password),
        ]);

    }

    protected function attemptToLogin($password)
    {
        return $this->post('login', [
            'email' => $this->user->email,
            'password' => $password
        ]);
    }

    public function testAuth()
    {
        $response = $this->attemptToLogin($this->password);
        $response->assertStatus(200);

        $response = $this->get('home');
        $response->assertStatus(200);

        $response = $this->get('logout');
        $response->assertStatus(200);

        $response = $this->get('home');
        $response->assertStatus(401);
        
    }

    public function testAuthFailed()
    {
        $response = $this->attemptToLogin($this->password . '2');
        $response->assertStatus(401);

        $response = $this->get('home');
        $response->assertStatus(401);
    }
}
