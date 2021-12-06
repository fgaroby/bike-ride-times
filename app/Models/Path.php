<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Path extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paths';

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

    public function getLatLngsAttribute(): string
    {
        $from = $this->markerFrom;
        $to = $this->markerTo;

        return json_encode([
            $from->latLng,
            $to->latLng,
        ]);
    }
}
