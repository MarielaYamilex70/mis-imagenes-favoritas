<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Image;


class ImageTest extends TestCase
{
    public function test_create_imagen()
    {

        $image = Image::factory()->create([
            'title' => 'Playa San Pedro',
            'user_id' => '1',
            'url'=>'HAhcjb4njrOW7pa8qn5FK0oZA3fE7C9v5RUpneol.jpg'
            
        ]);

         $this->assertDatabaseHas('images', [
            'user_id' => '1',
            'title' => 'Playa San Pedro',
            'url'=>'HAhcjb4njrOW7pa8qn5FK0oZA3fE7C9v5RUpneol.jpg'
            
        ]); 
    }

    public function test_update_imagen()
    {
        $image = Image::factory()->create();

        $image->title = 'La Montaña Mágica';
        $image->save();

        $this->assertDatabaseHas('images', [
            'id' => $image->id,
            'title' => 'La Montaña Mágica',
        ]);
    }

    public function test_destroy_imagen()
    {
        $image = Image::factory()->create();

        $image->delete();

        $this->assertDatabaseMissing('images', [
            'id' => $image->id,
        ]);
    }
}
