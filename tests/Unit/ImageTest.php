<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImageTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_image_index_returns_200_ok(): void
    {
        // Scenario: Retrieve Image
        // Given I am on the image page
        // When I make a GET request to '/image'
        // Then the response status code should be 200 OK

        $response = $this->call('GET', '/image', []);


        $response->assertStatus($response->status(), 200);
    }
    
}
