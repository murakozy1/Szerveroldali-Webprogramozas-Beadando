<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   /*
        Character::create([
            'name' => 'Test',
            'enemy' => 0,
            'defence' => 3,
            'strength' => 5,
            'accuracy' => 5,
            'magic' => 5,
            //'userid' => 1
        ]);
        */
        Character::factory(1)->create();
    }
}
