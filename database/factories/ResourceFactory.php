<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->word,
            'description' =>$this->faker->text(255),
            'img'=>$this->faker->imageUrl(640,480),

            'user_id' => rand (1,5),
            'location_id' => rand (1,5)
            
        ];
    }
}
