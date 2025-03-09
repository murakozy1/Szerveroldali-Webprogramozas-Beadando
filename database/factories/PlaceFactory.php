<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Place;
use Doctrine\Inflector\Rules\Word;
use Faker\Factory as Faker;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'name'=>fake()->word(),
            'image'=>fake()->imageUrl(1920, 1080, 'city')
        ];
    }
}
