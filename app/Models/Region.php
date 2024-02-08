<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }

    public function subregions(): HasMany
    {
        return $this->hasMany(Subregion::class);
    }
}
