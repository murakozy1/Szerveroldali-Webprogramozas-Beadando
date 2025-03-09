<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Character;
use App\Models\Place;
use App\Models\Contest;
use App\Models\CharacterContest;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        /*
        User::truncate();
        Character::truncate();
        Place::truncate();
        Contest::truncate();
        CharacterContest::truncate();   
        */


        //minden tabla felpopulalasa
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'admin'=>true
        ]);
        
        User::factory(10)->create();
        //
        $maxStats = 17;        
        $one = random_int(0,$maxStats - 5);
        $maxStats -= $one;
        $two = random_int(0,$maxStats);
        $maxStats -= $two;
        if ($maxStats < 0){
            $maxStats = 0;
        }
        $three = random_int(0,$maxStats);
        $arr = array($one, $two, $three);
        shuffle($arr);
        //
        Character::factory()->create([
            'name' => fake()->firstName(),
            'enemy' => true,
            'defence'=>random_int(0,3),
            'strength'=>$arr[0],
            'accuracy'=>$arr[1],
            'magic'=>$arr[2],
            'user_id'=>1
        ]);
        Character::factory(20)->create();
        
        Place::factory(5)->create();
        
        Contest::factory(10)->create();
        
        $contestLength = sizeof(Contest::pluck('id')->toArray());
        CharacterContest::factory($contestLength)->create();
    }
}
