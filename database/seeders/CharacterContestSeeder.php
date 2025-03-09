<?php

namespace Database\Seeders;

use App\Models\CharacterContest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterContestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CharacterContest::factory(10)->create();
        //CharacterContest::truncate();
    }
}
