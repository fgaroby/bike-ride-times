<?php

return [
    'common' => [
        'tile_host' => env('MAPS_TILE_HOST', 'openstreetmap'),
        'zoom'      => env('MAPS_ZOOM', 13),
    ],

    'mapbox' => [
        'access_token' => env('MAPS_MAPBOX_TOKEN', ''),
    ],
];
