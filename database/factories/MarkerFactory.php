<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'latitude' => $this->faker->randomFloat(5, 49.134104, 49.342573),
            'longitude' => $this->faker->randomFloat(5, -0.441513,-0.217667),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
