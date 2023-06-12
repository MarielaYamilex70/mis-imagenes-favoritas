<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_create_user()
    {
        $user = User::factory()->create([
            'name' => 'Eduardo',
            'email' => 'eduardo@gmail.com',
            'password' => 'eduardo',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Eduardo',
            'email' => 'eduardo@gmail.com'
        ]);
    }

    public function test_update_user()
    {
        $user = User::factory()->create();

        $user->name = 'Ernesto';
        $user->save();

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Ernesto',
        ]);
    }

    public function test_destroy_user()
    {
        $user = User::factory()->create();

        $user->delete();

        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }
}
