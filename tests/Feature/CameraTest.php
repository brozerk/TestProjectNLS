<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CameraTest extends TestCase
{
//    use DatabaseMigrations;
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     */
    /** @test  */
    public function cameraCreationTest(): void
    {
        $data = [
            'name' => 'tcn',
            'description' => 'tcd',
            'address' => 'tca',
            'long' => 100.1,
            'lat' => 100.2
        ];

        $response = $this->post('api/cameras', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('cameras', ['name' => $data['name']]);
    }
}
