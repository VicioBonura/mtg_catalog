<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Set;

class SetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sets = [
            [
                'name' => 'Antiquities',
                'code' => 'atq',
                'block_id' => null,
                'release_date' => '1994-03-04',
                'card_count' => 102,
                'set_type_id' => 1
            ],
            [
                'name' => 'Homelands',
                'code' => 'hml',
                'block_id' => null,
                'release_date' => '1995-10-01',
                'card_count' => 140,
                'set_type_id' => 2
            ],
            [
                'name' => 'Urzas Legacy',
                'code' => 'ulg',
                'block_id' => 9,
                'release_date' => '1999-02-15',
                'card_count' => 143,
                'set_type_id' => 2
            ],
            [
                'name' => 'Invasion',
                'code' => 'inv',
                'block_id' => 2,
                'release_date' => '2000-10-02',
                'card_count' => 353,
                'set_type_id' => 2
            ],
            [
                'name' => 'Planeshift',
                'code' => 'pls',
                'block_id' => 2,
                'release_date' => '2001-02-05',
                'card_count' => 146,
                'set_type_id' => 2
            ],
            [
                'name' => 'Onslaught',
                'code' => 'ons',
                'block_id' => 6,
                'release_date' => '2002-10-07',
                'card_count' => 351,
                'set_type_id' => 2
            ],
            [
                'name' => 'Legions',
                'code' => 'lgn',
                'block_id' => 6,
                'release_date' => '2003-02-03',
                'card_count' => 145,
                'set_type_id' => 2
            ],
            [
                'name' => 'Scourge',
                'code' => 'scg',
                'block_id' => 6,
                'release_date' => '2003-05-26',
                'card_count' => 143,
                'set_type_id' => 2
            ],
            [
                'name' => 'Eighth Edition',
                'code' => '8ed',
                'block_id' => null,
                'release_date' => '2003-07-28',
                'card_count' => 710,
                'set_type_id' => 1
            ],
            [
                'name' => 'Mirrodin',
                'code' => 'mrd',
                'block_id' => 5,
                'release_date' => '2003-10-02',
                'card_count' => 306,
                'set_type_id' => 2
            ],
            [
                'name' => 'Darksteel',
                'code' => 'dst',
                'block_id' => 5,
                'release_date' => '2004-02-06',
                'card_count' => 165,
                'set_type_id' => 2
            ],
            [
                'name' => 'Fifth Dawn',
                'code' => 'fdn',
                'block_id' => 5,
                'release_date' => '2004-06-04',
                'card_count' => 165,
                'set_type_id' => 2
            ],
            [
                'name' => 'Champions of Kamigawa',
                'code' => 'chk',
                'block_id' => 3,
                'release_date' => '2004-10-01',
                'card_count' => 307,
                'set_type_id' => 2
            ],
            [
                'name' => 'Betrayers of Kamigawa',
                'code' => 'bok',
                'block_id' => 3,
                'release_date' => '2005-02-04',
                'card_count' => 165,
                'set_type_id' => 2
            ],
            [
                'name' => 'Saviors of Kamigava',
                'code' => 'sok',
                'block_id' => 3,
                'release_date' => '2005-06-03',
                'card_count' => 165,
                'set_type_id' => 2
            ],
            [
                'name' => 'Ninth Edition',
                'code' => '9ed',
                'block_id' => null,
                'release_date' => '2005-07-29',
                'card_count' => 709,
                'set_type_id' => 1
            ],
            [
                'name' => 'Ravnica: City of Guilds',
                'code' => 'rav',
                'block_id' => 7,
                'release_date' => '2005-10-07',
                'card_count' => 306,
                'set_type_id' => 2
            ],
            [
                'name' => 'Guildpact',
                'code' => 'gpt',
                'block_id' => 7,
                'release_date' => '2006-02-03',
                'card_count' => 167,
                'set_type_id' => 2
            ],
            [
                'name' => 'Time Spiral Timeshifter',
                'code' => 'tsb',
                'block_id' => 8,
                'release_date' => '2006-10-06',
                'card_count' => 121,
                'set_type_id' => 2
            ],
            [
                'name' => 'Time Spiral',
                'code' => 'tsp',
                'block_id' => 8,
                'release_date' => '2006-10-06',
                'card_count' => 301,
                'set_type_id' => 2
            ],
            [
                'name' => 'Planar Chaos',
                'code' => 'plc',
                'block_id' => 8,
                'release_date' => '2007-02-02',
                'card_count' => 165,
                'set_type_id' => 2
            ],
            [
                'name' => 'Future Sight',
                'code' => 'fut',
                'block_id' => 8,
                'release_date' => '2007-05-04',
                'card_count' => 180,
                'set_type_id' => 2
            ],
            [
                'name' => 'Tenth Edition',
                'code' => '10e',
                'block_id' => null,
                'release_date' => '2007-07-13',
                'card_count' => 510,
                'set_type_id' => 1
            ],
            [
                'name' => 'Lorwyn',
                'code' => 'lrw',
                'block_id' => 4,
                'release_date' => '2007-10-12',
                'card_count' => 301,
                'set_type_id' => 2
            ],
            [
                'name' => 'Morningtide',
                'code' => 'mor',
                'block_id' => 4,
                'release_date' => '2008-02-01',
                'card_count' => 150,
                'set_type_id' => 2
            ],
            [
                'name' => 'Alara Reborn',
                'code' => 'arb',
                'block_id' => 1,
                'release_date' => '2009-04-30',
                'card_count' => 145,
                'set_type_id' => 2
            ],
            [
                'name' => 'Zendikar',
                'code' => 'zen',
                'block_id' => 10,
                'release_date' => '2009-10-02',
                'card_count' => 269,
                'set_type_id' => 2
            ],
            [
                'name' => 'Worldwake',
                'code' => 'wwk',
                'block_id' => 10,
                'release_date' => '2010-02-05',
                'card_count' => 145,
                'set_type_id' => 2
            ],
            [
                'name' => 'Rise of the Eldrazi',
                'code' => 'roe',
                'block_id' => 10,
                'release_date' => '2010-04-23',
                'card_count' => 248,
                'set_type_id' => 2
            ],
        ];

        foreach ($sets as $set) {
            Set::create($set);
        }
    }
}