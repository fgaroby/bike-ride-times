<?php

namespace Database\Seeders;

use App\Models\Path;
use Illuminate\Database\Seeder;

class PathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Path::factory()
            ->count(100)
            ->create();
    }
}
