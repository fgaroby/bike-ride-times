<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Map extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'maps';

    /**
     * Returns the center point of this map.
     *
     * @return array
     */
    public function getCenterPointAttribute(): array
    {
        return [
            'lat' => $this->latitude,
            'long' => $this->longitude,
        ];
    }

    /**
     * Return all the markers of this map.
     *
     * @return HasMany
     */
    public function markers(): HasMany
    {
        return $this->hasMany(Marker::class, 'map_id', 'id');
    }
}
