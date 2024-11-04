<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('set_types')->insert([
            ['name' => 'Core', 'description' => 'A yearly Magic core set'],
            ['name' => 'Expansion', 'description' => 'A rotational expansion set in a block'],
            ['name' => 'Masters', 'description' => 'A reprint set that contains no new cards'],
            ['name' => 'Alchemy', 'description' => 'An Arena set designed for Alchemy'],
            ['name' => 'Masterpiece', 'description' => 'Masterpiece Series premium foil cards'],
            ['name' => 'Arsenal', 'description' => 'A Commander-oriented gift set'],
            ['name' => 'From the Vault', 'description' => 'From the Vault gift sets'],
            ['name' => 'Spellbook', 'description' => 'Spellbook series gift sets'],
            ['name' => 'Premium Deck', 'description' => 'Premium Deck Series decks'],
            ['name' => 'Duel Deck', 'description' => 'Duel Decks'],
            ['name' => 'Draft Innovation', 'description' => 'Special draft sets, like Conspiracy and Battlebond'],
            ['name' => 'Treasure Chest', 'description' => 'Magic Online treasure chest prize sets'],
            ['name' => 'Commander', 'description' => 'Commander preconstructed decks'],
            ['name' => 'Planechase', 'description' => 'Planechase sets'],
            ['name' => 'Archenemy', 'description' => 'Archenemy sets'],
            ['name' => 'Vanguard', 'description' => 'Vanguard card sets'],
            ['name' => 'Funny', 'description' => 'A funny un-set or set with funny promos (Unglued, Happy Holidays, etc)'],
            ['name' => 'Starter', 'description' => 'A starter/introductory set (Portal, etc)'],
            ['name' => 'Box', 'description' => 'A gift box set'],
            ['name' => 'Promo', 'description' => 'A set that contains purely promotional cards'],
            ['name' => 'Token', 'description' => 'A set made up of tokens and emblems'],
            ['name' => 'Memorabilia', 'description' => 'A set made up of gold-bordered, oversize, or trophy cards that are not legal'],
            ['name' => 'Minigame', 'description' => 'A set that contains minigame card inserts from booster packs'],

        ]);
    }
}
