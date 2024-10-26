<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rarities')->insert([
            ['name' => 'Common'],
            ['name' => 'Uncommon'],
            ['name' => 'Rare'],
            ['name' => 'Mythic'],
        ]);
    }
}
