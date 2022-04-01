<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resera>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'user_id' => rand(1, 5),
            'location_id' => rand(1, 5),
            'resource_id' => rand(1, 5),
        ];
    }
}
