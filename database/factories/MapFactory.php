<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MapFactory extends Factory
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
            'latitude' => 49.1822222,
            'longitude' => -0.3705555555555555,
            'tile_host' => config('maps.common.tile_host'),
            'zoom' => config('maps.common.zoom'),
        ];
    }
}
