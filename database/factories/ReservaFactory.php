<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'user_id' => rand(1, 5),
            'resource_id' => rand(1, 5),
        ];
    }
}
