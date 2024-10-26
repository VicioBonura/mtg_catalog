<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Artifact'],
            ['name' => 'Battle'],
            ['name' => 'Creature'],
            ['name' => 'Enchantment'],
            ['name' => 'Instant'],
            ['name' => 'Land'],
            ['name' => 'Planeswalker'],
            ['name' => 'Sorcery'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
