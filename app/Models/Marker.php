<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marker extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'markers';

    public function getLatLngAttribute():  array
    {
        return [
            $this->attributes['latitude'],
            $this->attributes['longitude'],
        ];
    }

    public function paths(): HasMany
    {
        return $this->hasMany(Path::class, 'from', 'id');
    }
}
