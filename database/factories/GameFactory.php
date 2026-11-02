<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

      return [
    'title' => fake()->sentence(3),
    'platform' => fake()->randomElement(['PC', 'PlayStation', 'Xbox', 'Mobile']),
    'genre' => fake()->word(),
    'developer' => fake()->company(),
    'release_year' => fake()->numerify('20##'),
];
        
    }
}
