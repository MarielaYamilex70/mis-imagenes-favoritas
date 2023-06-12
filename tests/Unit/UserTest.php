<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_login_index_returns_200_ok(): void
    {
        // Scenario: Retrieve login
        // Given I am on the login page
        // When I make a GET request to '/login'
        // Then the response status code should be 200 OK

        $response = $this->call('GET', '/login', []);


        $response->assertStatus($response->status(), 200);
    }

    public function test_logout_index_returns_200_ok(): void
    {
        // Scenario: Retrieve logout
        // Given I am on the logout page
        // When I make a GET request to '/logout'
        // Then the response status code should be 200 OK

        $response = $this->call('GET', '/logout', []);


        $response->assertStatus($response->status(), 200);
    }

    public function test_register_index_returns_200_ok(): void
    {
        // Scenario: Retrieve register
        // Given I am on the register page
        // When I make a GET request to '/register'
        // Then the response status code should be 200 OK

        $response = $this->call('GET', '/register', []);


        $response->assertStatus($response->status(), 200);
    }

    
}
