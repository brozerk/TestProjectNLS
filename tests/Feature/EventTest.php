<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class EventTest extends TestCase
{
//    use DatabaseMigrations;
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     */
    /** @test  */
    public function eventCreationTest(): void
    {
        $data = [
            'camera_id' => 1,
            'event_type_id' => 2,
            'frame_url' => '100200fu'
        ];

        $response = $this->post('api/events', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('events', ['frame_url' => $data['frame_url']]);
    }

    /** @test  */
    public function eventsGettingTest(): void
    {
        $data = [
            'date_from' => '2023-07-21 14:00:41',
            'date_to' => '2023-08-21 14:00:41'
        ];

        $response = $this->get('api/events', $data);

        $response->assertStatus(200);
    }

    /** @test  */
    public function eventGettingTest(): void
    {
        $id = 1;

        $response = $this->get("api/events/{$id}", [$id]);

        $response->assertStatus(200);
    }
}
