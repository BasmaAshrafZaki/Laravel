<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'Title' => fake()->company(),
            'description' => fake()->text(),
            'PriceFrom' => fake()->numberBetween($min = 6000, $max = 12000),
            'PriceTo' => fake()->numberBetween($min = 6000, $max = 12000),
            'Image' => fake()->imageUrl(800,600),
           
            
        ];
        
    }
}

