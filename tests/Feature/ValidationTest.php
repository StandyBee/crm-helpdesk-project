<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ValidationTest extends TestCase
{
    use WithFaker;
    use DatabaseTransactions;
    
    public function testValidationWrongEmail()
    {
        $response = $this->post('login', [
            'email' => $this->faker->word,
            'password' => $this->faker->password
        ]);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('email', $content);
    }

    public function testValidationNoPassword()
    {
        $response = $this->post('login', [
            'email' => $this->faker->unique()->safeEmail
        ]);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('password', $content);
    }
}
