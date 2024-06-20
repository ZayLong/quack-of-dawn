<?php

namespace Database\Factories;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Duck>
 */
class DuckFactory extends Factory
{
    /**
     * Define the model's default state.
     * Ducks are like movies. You just shut up and watch em.
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'status' => 'Alive',
            'hit_points' => $this->faker->randomFloat(0, 50, 200),
            'equipment' => Equipment::factory()->raw(),
        ];
    }
}
