<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Block;
class BlocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blocks = [
            ['name' => 'Alara'],
            ['name' => 'Invasion'],
            ['name' => 'Kamigawa'],
            ['name' => 'Lorwyn'],
            ['name' => 'Mirrodin'],
            ['name' => 'Onslaught'],
            ['name' => 'Ravnica'],
            ['name' => 'Time Spiral'],
            ['name' => 'Urza'],
            ['name' => 'Zendikar'],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}