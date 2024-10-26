<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['name' => 'White', 'code' => 'W', 'symbol' => '⚪'],
            ['name' => 'Blue', 'code' => 'U', 'symbol' => '🔵'],
            ['name' => 'Black', 'code' => 'B', 'symbol' => '⚫'],
            ['name' => 'Red', 'code' => 'R', 'symbol' => '🔴'],
            ['name' => 'Green', 'code' => 'G', 'symbol' => '🟢'],
        ];

        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
