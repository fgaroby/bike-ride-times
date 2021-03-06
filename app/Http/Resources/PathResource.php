<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class PathResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'      => $this->id,
            'from'    => $this->markerFrom->id,
            'to'      => $this->markerTo->id,
            'latLngs' => $this->latLngs,
            'color'   => $this->color->color,
        ];
    }
}
