<?php

namespace Database\Seeders;

use App\Models\EventType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventType::insert([
            [
                'name' => '1etn',
            ],
            [
                'name' => '2etn',
            ],
            [
                'name' => '3etn',
            ],
        ]);
    }
}
