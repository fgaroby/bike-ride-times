<?php

namespace App\Http\Controllers;

use App\Models\Map;

class HomeController extends Controller
{
    public function welcome()
    {
        $map = Map::find(1);

        return view('welcome', [
            'map' => $map,
        ]);
    }
}
