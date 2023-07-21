<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                'camera_id' => 1,
                'event_type_id' => 1,
                'frame_url' => '11fu'
            ],
            [
                'camera_id' => 2,
                'event_type_id' => 2,
                'frame_url' => '22fu'
            ],
            [
                'camera_id' => 3,
                'event_type_id' => 3,
                'frame_url' => '33fu'
            ],
        ]);
    }
}
