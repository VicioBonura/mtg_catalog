<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supertypes')->insert([
            ['name' => 'Basic'],
            ['name' => 'Legendary'],
            ['name' => 'Ongoing'],
            ['name' => 'Snow'],
            ['name' => 'World'],
        ]);
    }
}
