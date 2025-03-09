<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contest;
use App\Models\CharacterContest;

class ContestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contest::factory(10)->create();
        //ez csak akkor mukodik (ahogyan a databaseseederben megirtam) ha ures minden table, vagyis ez a ket table tuti xd
        //meg kell javitani valahogy hogy itt vizsgalom meg hogy van e meg unconnected table es egyesevel seedelem a pivotot
        //$contestLength = sizeof(Contest::pluck('id')->toArray());
        //CharacterContest::factory($contestLength)->create();
        //Contest::truncate();
        //Contest::whereBetween('id', [22,31])->delete();
    }
}
