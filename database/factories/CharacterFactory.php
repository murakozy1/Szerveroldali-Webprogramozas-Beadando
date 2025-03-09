<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
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

        $usersArray = User::pluck('id')->toArray();
        $count = sizeof($usersArray);
        $id = $usersArray[random_int(0,$count-1)];
        //$id = 12;//armin
        $isEnemy = false;
        if($id === 1){
            $isEnemy = true;
        }
        
        return [
            'name'=>fake()->firstName(),
            'enemy'=>$isEnemy,
            'defence'=>random_int(0,3),
            'strength'=>$arr[0],
            'accuracy'=>$arr[1],
            'magic'=>$arr[2],
            'user_id'=>$id
        ];
    }
}
