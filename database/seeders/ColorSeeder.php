<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([
            [
                'name' => 'A',
                'color' => '#1C8950',
                'sorting' => 1,
            ],
            [
                'name' => 'B',
                'color' => '#85C83D',
                'sorting' => 2,
            ],
            [
                'name' => 'C',
                'color' => '#FDC729',
                'sorting' => 3,
            ],
            [
                'name' => 'D',
                'color' => '#FB7f1D',
                'sorting' => 4,
            ],
            [
                'name' => 'E',
                'color' => '#EF3818',
                'sorting' => 5,
            ],
        ]);
    }
}
