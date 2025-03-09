<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contest;
use App\Models\User;
use App\Models\Character;
use App\Models\Place;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contest>
 */
class ContestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $usersArray = User::pluck('id')->toArray();
        $usersWithCharacters = [];
        foreach($usersArray as $user_id){
            $characters = Character::where('user_id', $user_id)->get();
            if (sizeof($characters) > 0){
                $usersWithCharacters[] = $user_id;
            }
            unset($characters);
        }


        $placesArray = Place::pluck('id')->toArray();

        return [
            'win'=>random_int(0,1),
            'history'=>fake()->sentences(5, true),
            'user_id'=>$usersWithCharacters[random_int(0,sizeof($usersWithCharacters)-1)],
            'place_id'=>$placesArray[random_int(0,sizeof($placesArray)-1)],
        ];
    }
}
