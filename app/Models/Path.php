<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Path extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paths';

    public function getLatLngsAttribute(): string
    {
        $from = $this->markerFrom;
        $to = $this->markerTo;

        return json_encode([
            $from->latLng,
            $to->latLng,
        ]);
    }

    /**
     * Return the starting point Marker.
     *
     * @return BelongsTo
     */
    public function markerFrom(): BelongsTo
    {
        return $this->belongsTo(Marker::class, 'from', 'id');
    }

    /**
     * Return the ending point Marker.
     *
     * @return BelongsTo
     */
    public function markerTo(): BelongsTo
    {
        return $this->belongsTo(Marker::class, 'to', 'id');
    }

    /**
     * Return the color of this path.
     *
     * @return HasOne
     */
    public function color(): HasOne
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }
}
