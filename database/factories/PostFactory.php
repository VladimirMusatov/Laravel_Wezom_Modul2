<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = rand(0,1);

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'text' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'status' => $status,
            'created_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
            'updated_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
