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
            ['name' => 'alchemy', 'description' => 'An Arena set designed for Alchemy'],
            ['name' => 'masterpiece', 'description' => 'Masterpiece Series premium foil cards'],
            ['name' => 'arsenal', 'description' => 'A Commander-oriented gift set'],
            ['name' => 'from_the_vault', 'description' => 'From the Vault gift sets'],
            ['name' => 'spellbook', 'description' => 'Spellbook series gift sets'],
            ['name' => 'premium_deck', 'description' => 'Premium Deck Series decks'],
            ['name' => 'duel_deck', 'description' => 'Duel Decks'],
            ['name' => 'draft_innovation', 'description' => 'Special draft sets, like Conspiracy and Battlebond'],
            ['name' => 'treasure_chest', 'description' => 'Magic Online treasure chest prize sets'],
            ['name' => 'commander', 'description' => 'Commander preconstructed decks'],
            ['name' => 'planechase', 'description' => 'Planechase sets'],
            ['name' => 'archenemy', 'description' => 'Archenemy sets'],
            ['name' => 'vanguard', 'description' => 'Vanguard card sets'],
            ['name' => 'funny', 'description' => 'A funny un-set or set with funny promos (Unglued, Happy Holidays, etc)'],
            ['name' => 'starter', 'description' => 'A starter/introductory set (Portal, etc)'],
            ['name' => 'box', 'description' => 'A gift box set'],
            ['name' => 'promo', 'description' => 'A set that contains purely promotional cards'],
            ['name' => 'token', 'description' => 'A set made up of tokens and emblems'],
            ['name' => 'memorabilia', 'description' => 'A set made up of gold-bordered, oversize, or trophy cards that are not legal'],
            ['name' => 'minigame', 'description' => 'A set that contains minigame card inserts from booster packs'],

        ]);
    }
}
