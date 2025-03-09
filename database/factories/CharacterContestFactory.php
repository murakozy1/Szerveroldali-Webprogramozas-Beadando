<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Character;
use App\Models\Contest;
use App\Models\Place;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharacterContest>
 */
class CharacterContestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $enemyIds = Character::where('enemy', 1)->pluck('id')->toArray();
        $enemy_id = $enemyIds[random_int(0,sizeof($enemyIds)-1)];

        $contestToConnect = Contest::where('connected', 0)->first();
        $user_id = $contestToConnect->user_id;
        $contest_id = $contestToConnect->id;
        $win = $contestToConnect->win;

        $charactersOfUser = Character::where('user_id', $user_id)->pluck('id')->toArray();
        $character_id = $charactersOfUser[random_int(0,sizeof($charactersOfUser)-1)];

        $herohp = 0.0;
        $enemyhp = 0.0;

        if ($win){
            $herohp = rand(1, 19) + (rand(0, 99) / 100);
        }
        else{
            $enemyhp = rand(1, 19) + (rand(0, 99) / 100);
        }
        Contest::where('id', $contest_id)->update(['connected'=>1]);
        return [
            'character_id'=>$character_id,
            'contest_id'=>$contest_id,
            'hero_hp'=>$herohp,
            'enemy_hp'=>$enemyhp,
            'enemy_id'=>$enemy_id
        ];
    }
}
