<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'center_point' => ['lat' => 49.1822222, 'long' => -0.3705555555555555],
            'tile_host' => config('maps.common.tile_host'),
            'zoom_level' => config('maps.common.zoom'),
        ]);
    }
}
