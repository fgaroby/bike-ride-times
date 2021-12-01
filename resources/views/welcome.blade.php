@extends('layouts.app')

@section('content')
    <x-maps-leaflet
        :centerPoint="$center_point"
        :zoomLevel="$zoom_level"
        :tileHost="$tile_host">
    </x-maps-leaflet>
@endsection
