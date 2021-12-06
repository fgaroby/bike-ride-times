<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Marker;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PathFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from' => Marker::all()->random()->id,
            'to' => Marker::all()->random()->id,
            'color_id' => Color::all()->random()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
