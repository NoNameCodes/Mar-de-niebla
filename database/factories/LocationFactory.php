<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    public function definition()
    {
        return [
            'address' => $this->faker->streetAddress,
            'resource_id' => rand(1, 5)
        ];
    }
}
