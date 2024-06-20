<?php

namespace Database\Factories;

use App\Models\Armor;
use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $w = [
            'attack_power' => $this->faker->randomFloat(2, 1.0, 5.0)
        ];
                    $a = [
                        'defense_power' => $this->faker->randomFloat(2, 1.0, 5.0)
                    ];
        return [



            'weapon' => $w['attack_power'],
            'armor' => $a['defense_power'],
        ];
    }
}
