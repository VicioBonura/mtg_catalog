<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubType;

class SubTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subtypes = [
            ['name' => 'Arcane'],
            ['name' => 'Assassin'],
            ['name' => 'Aura'],
            ['name' => 'Avatar'],
            ['name' => 'Bringer'],
            ['name' => 'Cat'],
            ['name' => 'Centaur'],
            ['name' => 'Demon'],
            ['name' => 'Dragon'],
            ['name' => 'Druid'],
            ['name' => 'Dwarf'],
            ['name' => 'Elf'],
            ['name' => 'Elemental'],
            ['name' => 'Elephant'],
            ['name' => 'Equipment'],
            ['name' => 'Faerie'],
            ['name' => 'Fox'],
            ['name' => 'Gnome'],
            ['name' => 'Golem'],
            ['name' => 'Goblin'],
            ['name' => 'Hellion'],
            ['name' => 'Human'],
            ['name' => 'Kirin'],
            ['name' => 'Knight'],
            ['name' => 'Leech'],
            ['name' => 'Lizard'],
            ['name' => 'Mutant'],
            ['name' => 'Merfolk'],
            ['name' => 'Ooze'],
            ['name' => 'Orc'],
            ['name' => 'Rat'],
            ['name' => 'Rhino'],
            ['name' => 'Rogue'],
            ['name' => 'Samurai'],
            ['name' => 'Skeleton'],
            ['name' => 'Sliver'],
            ['name' => 'Soldier'],
            ['name' => 'Spirit'],
            ['name' => 'Thopter'],
            ['name' => 'Troll'],
            ['name' => 'Undead'],
            ['name' => 'Vampire'],
            ['name' => 'Vedalken'],
            ['name' => 'Warrior'],
            ['name' => 'Weird'],
            ['name' => 'Wizard'],
            ['name' => 'Zombie'],
        ];

        foreach ($subtypes as $subtype) {
            SubType::create($subtype);
        }
    }
}
