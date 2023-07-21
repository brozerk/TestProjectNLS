<?php

namespace Database\Seeders;

use App\Models\Camera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Camera::insert([
            [
                'name' => '1cn',
                'description' => '1cd',
                'address' => '1ca',
                'long' => 1.1,
                'lat' => 1.2
            ],
            [
                'name' => '2cn',
                'description' => '2cd',
                'address' => '2ca',
                'long' => 2.1,
                'lat' => 2.2
            ],
            [
                'name' => '3cn',
                'description' => '3cd',
                'address' => '3ca',
                'long' => 3.1,
                'lat' => 3.2
            ],
        ]);
    }
}
